<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Funciones;
use App\Model\DatosRepositorioFinalPre;
use App\Model\DatosRepositorioFinalReins;
use App\Model\Documentos;
use App\Model\Inscripcion;
use App\Model\Logs;
use App\Model\PersonasAutorizadas;
use App\Model\Reinscripcion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Validator;

use function GuzzleHttp\Promise\all;

class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->funciones = new Funciones;
    }
    public function getAllDatosRepos()
    {
        $datosReposPre = DatosRepositorioFinalPre::get();
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('datos_repositorio_final_pre');
        $ciclo_escolar_report = null;
        $tabla = 'datos_repositorio_final_pre';
        $name_key_foreing_repost = 'datos_repositorio_final_pre_id';
        return view('admin.all_datos_repos', compact('datosReposPre', 'ciclos_escolares_filter','ciclo_escolar_report','tabla','name_key_foreing_repost'));
    }
    public function getAllDatosReposByCicloEscolar(Request $request)
    {
        $datosReposPre = DatosRepositorioFinalPre::where('ciclo_escolar', $request->ciclo_escolar)->orderBy('id', 'desc')->get();
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('datos_repositorio_final_pre');
        $ciclo_escolar_report = $request->ciclo_escolar;
        $tabla = 'datos_repositorio_final_pre';
        $name_key_foreing_repost = 'datos_repositorio_final_pre_id';
        return view('admin.all_datos_repos', compact('datosReposPre', 'ciclos_escolares_filter','ciclo_escolar_report','tabla','name_key_foreing_repost'));
    }
    public function getAllDatosReposReins()
    {
        $datosReposReins = DatosRepositorioFinalReins::get();
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('datos_repositorio_final_reins');
        $ciclo_escolar_report = null;
        $tabla = 'datos_repositorio_final_reins';
        $name_key_foreing_repost = 'datos_repositorio_final_reins_id';
        return view('admin.all_datos_repos_reins', compact('datosReposReins', 'ciclos_escolares_filter','ciclo_escolar_report','tabla','name_key_foreing_repost'));
    }
    public function getAllDatosReposReinsByCicloEscolar(Request $request)
    {
        $datosReposReins = DatosRepositorioFinalReins::where('ciclo_escolar', $request->ciclo_escolar)->orderBy('id', 'desc')->get();
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('datos_repositorio_final_reins');
        $ciclo_escolar_report = $request->ciclo_escolar;
        $tabla = 'datos_repositorio_final_reins';
        $name_key_foreing_repost = 'datos_repositorio_final_reins_id';
        return view('admin.all_datos_repos_reins', compact('datosReposReins', 'ciclos_escolares_filter','ciclo_escolar_report','tabla','name_key_foreing_repost'));
    }
    public function getByIdRepo($id)
    {
        $datoByIdReposPre = DatosRepositorioFinalPre::where('id', $id)->get();
        $idRepositorio = $datoByIdReposPre[0]['id'];
        $proceso = 'Preinscripción';
        $nameColumnPreinsc = 'datos_repositorio_final_pre_id';
        $processPersonasAutorizadas = $this->getDataPersonasAutorizadas($nameColumnPreinsc, $idRepositorio);
        $processPersonasAutorizadas = $processPersonasAutorizadas[0];
        /* dd($processPersonasAutorizadas); */
        return view('admin.detalles_repo', compact('datoByIdReposPre', 'processPersonasAutorizadas', 'proceso'));
    }
    public function getByIdRepoReins($id)
    {
        $datoByIdReposPre = DatosRepositorioFinalReins::where('id', $id)->get();
        $idRepositorio = $datoByIdReposPre[0]['id'];
        $proceso = 'Reinscripción';
        $nameColumnReinsc = 'datos_repositorio_final_reins_id';
        $processPersonasAutorizadas = $this->getDataPersonasAutorizadas($nameColumnReinsc, $idRepositorio);
        $processPersonasAutorizadas = $processPersonasAutorizadas[0];
        /* dd($processPersonasAutorizadas); */
        return view('admin.detalles_repo', compact('datoByIdReposPre', 'processPersonasAutorizadas', 'proceso'));
    }
    public function updateDataRepositorio($idRepo, Request $request)
    {
        $reglas = $this->reglasRepositorio();
        $rules = $reglas[0];
        $messages = $reglas[1];
        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                $repositorio = $request->all();
                unset($repositorio['_token']);
                DatosRepositorioFinalPre::updateRepo($repositorio, $idRepo);
                DB::commit();
                return response()->json(['ok' => true]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo Actualizar los datos del repositorio Inscripción']);
        }
    }
    public function updateDataRepositorioReinscripcion($idRepo, Request $request)
    {
        $reglas = $this->reglasRepositorio();
        $rules = $reglas[0];
        $messages = $reglas[1];
        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                $repositorio = $request->all();
                unset($repositorio['_token']);
                DatosRepositorioFinalReins::updateRepo($repositorio, $idRepo);
                DB::commit();
                return response()->json(['ok' => true]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo Actualizar los datos del repositorio Reinscripción']);
        }
    }
    public function updatePA($idPA, Request $request)
    {
        $personaAuthModify = $this->processPersonaAutorizada($request->personaAuth);
        $reglas = $this->reglasPA();
        $rules = $reglas[0];
        $messages = $reglas[1];
        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                PersonasAutorizadas::updatePA($personaAuthModify, $idPA);
                DB::commit();
                return response()->json(['ok' => true]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo Actualizar los datos de la Persona Autorizada']);
        }
    }
    public function setDataRepositorio(Request $request)
    {
        $reglas = $this->reglasRepositorio();
        $rules = $reglas[0];
        $messages = $reglas[1];

        DB::beginTransaction();

        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                DatosRepositorioFinalPre::create($request->all());
                $idRepositorio = DatosRepositorioFinalPre::select('id')->orderByDesc('id')->get()->first();
                $idRepositorio = $idRepositorio->id;
                DB::commit();
                return response()->json(['ok' => true, 'idRepositorio' => $idRepositorio]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo guardar los datos del repositorio Inscripción']);
        }
    }
    public function setDataRepositorioReinscripcion(Request $request)
    {
        $reglas = $this->reglasRepositorio();
        $rules = $reglas[0];
        $messages = $reglas[1];
        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                DatosRepositorioFinalReins::create($request->all());
                $idRepositorio = DatosRepositorioFinalReins::select('id')->orderByDesc('id')->get()->first();
                $idRepositorio = $idRepositorio->id;
                DB::commit();
                return response()->json(['ok' => true, 'idRepositorio' => $idRepositorio]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false]);
        }
    }
    public function setPersonaAutorizada(Request $request)
    {
        $personaAuthModify = $this->processPersonaAutorizada($request->personaAuth);
        PersonasAutorizadas::create($personaAuthModify);
        DB::commit();
        return response()->json(['ok' => true]);
        /* $reglas = $this->reglasPA();
        $rules = $reglas[0];
        $messages = $reglas[1]; */
        /* try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo guardar los datos de la Persona Autorizada']);
        } */
    }
    private function reglasRepositorio()
    {
        $rules = [
            'caci' => 'required|string',
            'detec_nutricion' => 'string',
            'fecha_preins' => 'date',
            'matricula' => 'string',
            'grupo_nino' => 'string',            
            'nombre_comple_nino' => 'required|string',
            'edad_nino' => 'required|string',
            'curp_nino' => 'required|string',
            'fecha_nac_nino' => 'string',
            'genero_nino' => 'string',
            'entidad_naci_nino' => 'string',
            'alcaldia_registro_nino' => 'string',
            'num_acta_nac_nino' => 'string',
            'libro_act_nac_nino' => 'string',
            'domicilio_part_nino' => 'string',
            'numero_domici_nino' => 'string',
            'colonia_nino' => 'string',
            'alcaldia_nino' => 'string',
            'necesidades_nino' => 'string',
            'institucion_nino' => 'string',
            'derechohabiencia_nino' => 'string',            
            'grupo_sanguineo' => 'string',
            'nombre_completo_padre' => 'required|string',
            'rfc_padre' => 'required|string',
            'curp_padre' => 'required|string',
            'genero_padre' => 'string',
            'entidad_nac_padre' => 'string',
            'fecha_nac_padre' => 'date',
            'edad_padre' => 'numeric',
            'edo_civil_padre' => 'string',
            'nivel_escolar_padre' => 'string',
            'conclusion_nive_esco_padre' => 'string',
            'parentesco_con_nino' => 'string',
            'domicilio_calle_padre' => 'required|string',
            'numero_domici_padre' => 'required|string',
            'colonia_padre' => 'required|string',
            'alcaldia_padre' => 'required|string',        
            'email_padre' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'clave_sector_padre' => 'required|string',
            'ente_administrativo_padre' => 'required|string',
            'nombre_unidad_administrativa_padre' => 'required|string',
            'clave_unidad_admin_padre' => 'required|string',
            'area_adscripcion_padre' => 'required|string',
            'descripcion_puesto_padre' => 'required|string',
            'funcion_real_padre' => 'string',
            'tipo_nomina_laboral_padre' => 'required|string',
            'num_empleado_laboral_padre' => 'required|string',
            'num_plaza_laboral_padre' => 'required|string',
            'nivel_salarial_laboral_padre' => 'required|string',
            'seccion_sindical_laboral_padre' => 'required|string',
            'horario_ent_laboral_padre' => 'required|string',
            'horario_sal_laboral_padre' => 'required|string',
            'dias_laborales_padre' => 'string',
            'ciclo_escolar' => 'string'
        ];
        $messages = [
            'caci.string' => 'Su Nombre Del CACI-SAF debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'detec_nutricion.string' => 'Su Detección de Nutrición del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'matricula.string' => 'Su Matrícula del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'grupo_nino.string' => 'Su Grupo del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'nombre_comple_nino.string' => 'Su Nombre completo de la niña o niño del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'edad_nino.string' => 'Su Edad del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'curp_nino.string' => 'Su Curp del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'genero_nino.string' => 'Su Género del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'entidad_naci_nino.string' => 'Su Entidad de Nacimiento del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'alcaldia_registro_nino.string' => 'Su Alcaldía o Municipio de Registro del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'num_acta_nac_nino.string' => 'Su Número de Acta de nacimiento del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'libro_act_nac_nino.string' => 'Su Libro del Acta de Nacimiento del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'domicilio_part_nino.string' => 'Su Domicilio Particular(avenida o calle) del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'numero_domici_nino.string' => 'Su Número(Exterior,Interior,Lote,Manzana,etc) del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'colonia_nino.string' => 'Su Colonia del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'alcaldia_nino.string' => 'Su Alcaldía o Municipio del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'necesidades_nino.string' => 'Especifique las necesidades que requiere del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'institucion_nino.string' => 'Su Nombre de la institucion que atiende del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'derechohabiencia_nino.string' => 'Su Derechohabiencia del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'grupo_sanguineo.string' => 'Su Grupo sanguíneo y RH del niño o la niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'nombre_completo_padre.string' => 'Su Nombre Completo de la madre, Padre o Persona Tutora del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'rfc_padre.string' => 'Su RFC con Homoclave del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'curp_padre.string' => 'Su Curp del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'genero_padre.string' => 'Su Género del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'entidad_nac_padre.string' => 'Su Entidad de Nacimiento del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'edad_padre.numeric' => 'Su Edad del padre debe ser numerico',
            'edo_civil_padre.string' => 'Su Estado Civil de la Persona del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'nivel_escolar_padre.string' => 'Su Nivel de Escolaridad del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'conclusion_nive_esco_padre.string' => 'Su En Curso, Trunco, o Concluido del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'parentesco_con_nino.string' => 'Su Parentesco con la niña o el niño del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'domicilio_calle_padre.string' => 'Su Domicilio particular (avenida o calle) del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'numero_domici_padre.string' => 'Su Número (Exterior, Interior, Lote, Manzana etc.) del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'colonia_padre.string' => 'Su Colonia del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'alcaldia_padre.string' => 'Su Alcaldía o Municipio del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'clave_sector_padre.string' => 'Su Clave de Sector del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'ente_administrativo_padre.string' => 'Su Secretaría o Ente Administrativo del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'nombre_unidad_administrativa_padre.string' => 'Su Clave de la Unidad Administrativa del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'clave_unidad_admin_padre.string' => 'Su Nombre de la Unidad Administrativa del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'area_adscripcion_padre.string' => 'Su Oficina o Área de Adscripción del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'descripcion_puesto_padre.string' => 'Su Descripción del puesto del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'funcion_real_padre.string' => 'Su Función Real del padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'tipo_nomina_laboral_padre.string' => 'Su Tipo de Nomina Laboral del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'num_empleado_laboral_padre.string' => 'Su Número de Empleado Laboral del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'num_plaza_laboral_padre.string' => 'Su Número de Plaza Laboral del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'nivel_salarial_laboral_padre.string' => 'Su Nivel Salarial Laboral del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'seccion_sindical_laboral_padre.string' => 'Su Sección Sindical Laboral del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'horario_ent_laboral_padre.string' => 'Su Horario Laboral (Entrada) del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'horario_sal_laboral_padre.string' => 'Su Horario Laboral (Salida) del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'dias_laborales_padre.string' => 'Su Días Laborales del Padre debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'ciclo_escolar.string' => 'Su ciclo escolar debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'caci.required' => 'Su Nombre Del CACI-SAF es requerido',
            'nombre_comple_nino.required' => 'Su Nombre completo de la niña o niño es requerido',
            'edad_nino.required' => 'Su Edad del niño o niña es requerido',
            'curp_nino.required' => 'Su Curp del niño o niña es requerido',
            'telefono_recado_nino.required' => 'Su télefono de recados del niño o niña es requerido',
            'nombre_completo_padre.required' => 'Su Nombre Completo de la madre, Padre o Persona Tutora es requerido',
            'rfc_padre.required' => 'Su RFC con Homoclave del Padre es requerido',
            'curp_padre.required' => 'Su Curp del Padre es requerido',
            'domicilio_calle_padre.required' => 'Su Domicilio particular (avenida o calle) del Padre es requerido',
            'numero_domici_padre.required' => 'Su Número (Exterior, Interior, Lote, Manzana etc.) del Padre es requerido',
            'colonia_padre.required' => 'Su Colonia del Padre es requerido',
            'alcaldia_padre.required' => 'Su Alcaldía o Municipio del Padre es requerido',
            'codigo_postal_padre.required' => 'Su Código Postal del Padre es requerido',
            'tel_particular_padre.required' => 'Su Teléfono Particular del Padre es requerido',
            'tel_celular_padre.required' => 'Su Teléfono Celular del Padre es requerido',
            'email_padre.required' => 'Su Email del Padre es requerido',
            'clave_sector_padre.required' => 'Su Clave de Sector del Padre es requerido',
            'ente_administrativo_padre.required' => 'Su Secretaría o Ente Administrativo del Padre es requerido',
            'nombre_unidad_administrativa_padre.required' => 'Su Clave de la Unidad Administrativa del Padre es requerido',
            'clave_unidad_admin_padre.required' => 'Su Nombre de la Unidad Administrativa del Padre es requerido',
            'area_adscripcion_padre.required' => 'Su Oficina o Área de Adscripción del Padre es requerido',
            'descripcion_puesto_padre.required' => 'Su Descripción del puesto del Padre es requerido',
            'tipo_nomina_laboral_padre.required' => 'Su Tipo de Nomina del Padre es requerido',
            'num_empleado_laboral_padre.required' => 'Su Número de Empleado del Padre es requerido',
            'num_plaza_laboral_padre.required' => 'Su Número de Plaza del Padre es requerido',
            'nivel_salarial_laboral_padre.required' => 'Su Nivel Salarial del Padre es requerido',
            'seccion_sindical_laboral_padre.required' => 'Su Sección Sindical del Padre es requerido',
            'horario_ent_laboral_padre.required' => 'Su Horario Laboral (Entrada) del Padre es requerido',
            'horario_sal_laboral_padre.required' => 'Su Horario Laboral (Salida) del Padre es requerido',
            'fecha_preins.date' => 'Su Fecha de inscripción debe ser una fecha',
            'fecha_nac_nino.string' => 'Su Fecha de Nacimiento del niño o niña debe ser un texto. Nota: En caso de aun no tener el dato, poner "Sin dato" para despues agregarlo en la actualización',
            'fecha_nac_padre.date' => 'Su Fecha de Nacimiento del padre debe ser una fecha',
            'email_padre.regex' => 'Su Email del padre no tiene el formato correcto',
        ];
        return [$rules, $messages];
    }
    private function reglasPA()
    {
        $rules = [
            'nombre_comple_person_autorizada' => 'string',
            'entidad_nac_person_autorizada' => 'string',
            'fecha_nac_person_autorizada' => 'date',
            'edad_person_autorizada' => 'string',
            'genero_person_autorizada' => 'string',
            'curp_person_autorizada' => 'string',
            'nivel_escol_person_autorizada' => 'string',
            'concluido_nivel_esc_person_autorizada' => 'string',
            'parentesco_nino_person_autorizada' => 'string',
            'domicilio_calle_person_autorizada' => 'string',
            'numero_domicilio_person_autorizada' => 'string',
            'colonia_person_autorizada' => 'string',
            'alcaldia_person_autorizada' => 'string',
            'codigo_postal_person_autorizada' => 'numeric',
            'tel_particular_person_autorizada' => 'numeric',
            'tel_celular_person_autorizada' => 'numeric',
            'email_person_autorizada' => 'regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'ocupacion_person_autorizada' => 'string',
            'domicilio_laboral_calle_person_autorizada' => 'string',
            'numero_domicilio_laboral_person_autorizada' => 'string',
            'colonia_laboral_person_autorizada' => 'string',
            'alcaldia_laboral_person_autorizada' => 'string',
            'codigo_postal_laboral_person_autorizada' => 'numeric',
            'tel_laboral_person_autorizada' => 'numeric',
            'extension_tel_laboral_person_autorizada' => 'numeric'
        ];
        $messages = [
            'nombre_comple_person_autorizada.string' => 'Su Nombre completo de la persona autorizada debe ser un texto',
            'entidad_nac_person_autorizada.string' => 'Su Entidad de Nacimiento de la persona autorizada debe ser un texto',
            'fecha_nac_person_autorizada.date' => 'Su Fecha de Nacimiento debe ser una fecha',
            'edad_person_autorizada.string' => 'Su Edad de la persona autorizada debe ser un texto',
            'genero_person_autorizada.string' => 'Su Género de la persona autorizada debe ser un texto',
            'curp_person_autorizada.string' => 'Su Curp de la persona autorizada debe ser un texto',
            'nivel_escol_person_autorizada.string' => 'Su Nivel de Escolaridad de la persona autorizada debe ser un texto',
            'concluido_nivel_esc_person_autorizada.string' => 'Su En Curso, Trunco o Concluido de la persona autorizada debe ser un texto',
            'parentesco_nino_person_autorizada.string' => 'Su Parentesco con la niña o el niño de la persona autorizada debe ser un texto',
            'domicilio_calle_person_autorizada.string' => 'Su Domicilio Particular (Avenida o Calle) de la persona autorizada debe ser un texto',
            'numero_domicilio_person_autorizada.string' => 'Su Número(Exterior, Interior, Lote, Manzana, etc.) de la persona autorizada debe ser un texto',
            'colonia_person_autorizada.string' => 'Su Colonia de la persona autorizada debe ser un texto',
            'alcaldia_person_autorizada.string' => 'Su Alcaldía o Municipio de la persona autorizada debe ser un texto',
            'codigo_postal_person_autorizada.numeric' => 'Su Código Postal de la persona autorizada debe ser un número',
            'tel_particular_person_autorizada.numeric' => 'Su Teléfono Particular de la persona autorizada debe ser un número',
            'tel_celular_person_autorizada.numeric' => 'Su Teléfono Celular de la persona autorizada debe ser un número',
            'email_person_autorizada.regex' => 'Su Email de la persona autorizada no tiene el formato correcto',
            'ocupacion_person_autorizada.string' => 'Su Ocupación de la persona autorizada debe ser un texto',
            'domicilio_laboral_calle_person_autorizada.string' => 'Su Domicilio Laboral (Avenida o Calle) de la persona autorizada debe ser un texto',
            'numero_domicilio_laboral_person_autorizada.string' => 'Su Número Laboral (Exterior, Interior, Lote, Manzana etc.) de la persona autorizada debe ser un texto',
            'colonia_laboral_person_autorizada.string' => 'Su Colonia Laboral de la persona autorizada debe ser un texto',
            'alcaldia_laboral_person_autorizada.string' => 'Su Alcaldía o Municipio Laboral de la persona autorizada debe ser un texto',
            'codigo_postal_laboral_person_autorizada.numeric' => 'Su Código Postal Laboral de la persona autorizada debe ser un número',
            'tel_laboral_person_autorizada.numeric' => 'Su Teléfono laboral de la persona autorizada debe ser un número',
            'extension_tel_laboral_person_autorizada.numeric' => 'Su Extensión del teléfono laboral de la persona autorizada debe ser un número',
        ];
        return [$rules, $messages];
    }
    private function processPersonaAutorizada($personaAuth)
    {
        $personaAutorizada = json_decode($personaAuth);
        $personaAuthModify = [];
        // crea nueva persona autorizada para poder insertar en la bd
        foreach ($personaAutorizada as $key => $value) {
            //extrae de persona autorizada 2 de la llave al final "_dos"
            $contieneStringDos = substr($key, -4, 4);
            if ($contieneStringDos == '_dos') {
                //las dos personas ya contienen el mismo tipo de llave para poder insertar en bd(aqui persona autoizada 2)
                $keyPersAuth = substr($key, 0, -4);
                $personaAuthModify[$keyPersAuth] = $value;
            } else {
                //aqui es donde se crea el arreglo de la persona autorizada 1
                $personaAuthModify[$key] = $value;
            }
        }
        return $personaAuthModify;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tokenId = 'SistemaDeRpueba4as4x4vdlsad';
        $emailCaci = Session::get('email');
        $nameUser = Session::get('name');
        $data = Documentos::where('reinscripcion_menor_id', $id)->get();
        $listaDatosReposRe = DatosRepositorioFinalReins::where('inscripcion_menor_id', $id)->get();
        $arrayRepo = $listaDatosReposRe->toArray();
        $isEmptyLista = empty($arrayRepo);
        if (!$isEmptyLista) {
            //hay datos en el repositorio, entonces se planchan estos en la vista            
            $lista_reinscripcion = Reinscripcion::where('id', $id)->get();
            /* dd($lista_reinscripcion); */
            $idRepositorio = $listaDatosReposRe[0]['id'];
            $nameColumnReinsc = 'datos_repositorio_final_reins_id';
            $processPersonasAutorizadas = $this->getDataPersonasAutorizadas($nameColumnReinsc, $idRepositorio);
            $idPersonaAutorizadaUno = $processPersonasAutorizadas[1];
            $idPersonaAutorizadaDos = $processPersonasAutorizadas[2];
            $processPersonasAutorizadas = $processPersonasAutorizadas[0];
            return view('admin.lista_documentos_update', compact('data', 'id', 'lista_reinscripcion', 'listaDatosReposRe', 'processPersonasAutorizadas', 'emailCaci', 'nameUser', 'idRepositorio', 'idPersonaAutorizadaUno', 'idPersonaAutorizadaDos'));
        } else {
            //si no hay datos en el repositorio, se planchan los datos de lista de inscripcion y del ws
            $lista_reinscripcion = Reinscripcion::where('id', $id)->get();
            $rfc = $this->getRFC($lista_reinscripcion);
            $dataUserWS = $this->getDataWebService($rfc, $tokenId);
            return view('admin.lista_documentos_save', compact('data', 'id', 'lista_reinscripcion', 'emailCaci', 'nameUser', 'dataUserWS'));
        }
    }
    public function details($id)
    {
        $data = Documentos::find($id);
        return view('admin.detalles_documento', compact('data'));
    }
    public function show_inscr($id)
    {
        //dd(Session::get('email'));
        $tokenId = 'SistemaDeRpueba4as4x4vdlsad';
        $emailCaci = Session::get('email');
        $nameUser = Session::get('name');
        $data = Documentos::where('inscripcion_menor_id', $id)->get();
        $listaDatosReposPre = DatosRepositorioFinalPre::where('inscripcion_menor_id', $id)->get();
        $arrayRepo = $listaDatosReposPre->toArray();
        $isEmptyLista = empty($arrayRepo);
        if (!$isEmptyLista) {
            //hay datos en el repositorio, entonces se planchan estos en la vista            
            $lista_inscripcion = Inscripcion::where('id', $id)->get();
            $idRepositorio = $listaDatosReposPre[0]['id'];
            $nameColumnPreinsc = 'datos_repositorio_final_pre_id';
            $processPersonasAutorizadas = $this->getDataPersonasAutorizadas($nameColumnPreinsc, $idRepositorio);
            $idPersonaAutorizadaUno = $processPersonasAutorizadas[1];
            $idPersonaAutorizadaDos = $processPersonasAutorizadas[2];
            $processPersonasAutorizadas = $processPersonasAutorizadas[0];
            return view('admin.lista_documentos_insc_update', compact('data', 'id', 'lista_inscripcion', 'listaDatosReposPre', 'processPersonasAutorizadas', 'emailCaci', 'nameUser', 'idRepositorio', 'idPersonaAutorizadaUno', 'idPersonaAutorizadaDos'));
        } else {
            //si no hay datos en el repositorio, se planchan los datos de lista de inscripcion y del ws
            $lista_inscripcion = Inscripcion::where('id', $id)->get();
            $rfc = $this->getRFC($lista_inscripcion);
            $dataUserWS = $this->getDataWebService($rfc, $tokenId);
            return view('admin.lista_documentos_insc_save', compact('data', 'id', 'lista_inscripcion', 'emailCaci', 'nameUser', 'dataUserWS'));
        }
    }
    public function getDataPersonasAutorizadas($nameColumnPreinsc, $idRepositorio)
    {
        //devuelve un arreglo con tres elemenots importantes
        $personasAutorizadas = PersonasAutorizadas::where($nameColumnPreinsc, $idRepositorio)->get();
        $arrayPersonasAutorizadas = $personasAutorizadas->toArray();
        /* dd($arrayPersonasAutorizadas); */
        $idPersonaAutorizadaUno = null;
        $idPersonaAutorizadaDos = null;
        $processPersonasAutorizadas = [];
        foreach ($arrayPersonasAutorizadas as $key => $value) {
            if ($key == 0) {
                foreach ($value as $llaveHija => &$valueHijo) {
                    /* dd($llaveHija); */
                    if ($llaveHija != 'id') {
                        $llaveHija .= '_dos';
                        $processPersonasAutorizadas[0][$llaveHija] = $valueHijo;
                    } else {
                        $idPersonaAutorizadaDos = $valueHijo;
                        $processPersonasAutorizadas[0][$llaveHija] = $valueHijo;
                    }
                }
            } else {
                foreach ($value as $llaveHija => &$valueHijo) {
                    if ($llaveHija == 'id') {
                        $idPersonaAutorizadaUno = $valueHijo;
                    } else {
                        $processPersonasAutorizadas[0][$llaveHija] = $valueHijo;
                    }
                }
            }
        }
        return [$processPersonasAutorizadas, $idPersonaAutorizadaUno, $idPersonaAutorizadaDos];
    }

    public function getRFC($lista)
    {
        $arrayListaIns = $lista->toArray()[0];
        $rfc = null;
        foreach ($arrayListaIns as $key => $value) {
            if ($key == 'rfc') {
                $rfc = $value;
                return $rfc;
            }
        }
    }

    public function getDataWebService($RFC, $tokenId)
    {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => "10.1.181.9:9003/usuarios/loadUserCASI",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"$tokenId\"\n },\n \"data\":\n {\n \"RFC\":\"$RFC\"\n }\n \n}",
            CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

        ));
        $response = curl_exec($ch);
        curl_close($ch);

        $array = json_decode($response, true);
        foreach ($array['data'] as $key => &$value) {
            if ($value === "0" || is_null($value)) {
                $value = "DATO NO ENCONTRADO";
            }
        }
        foreach ($array['data_adicional'] as $key => &$value) {
            $array['data'][$key] = $value;
        }
        $data['user'] = $array['data'];
        return $data;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDataLogById(Request $request)
    {
        /* dd($request->nameUser); */
        if ($request->id) {
            $dataLogs = Logs::where($request->id_proceso, $request->id)->get();
            /* $dataLogs=json_encode($dataLogs[0]); */
            return response()->json(['ok' => true, 'result' => $dataLogs[0]]);
        } else {
            return response()->json(['ok' => false]);
        }
    }

    public function compruebaSiExisteDocs($request)
    {

        $nameDocumento = DB::table('documentos')
            ->where($request->id_proceso, $request->id)->get()->pluck('nombre');
        $array_image = $this->funciones->saveImagePath($nameDocumento);
        for ($index = 0; $index < count($array_image); $index++) {
            if (!File::exists($array_image[$index])) {
                return false;
            }
        }
        return $array_image;
    }

    public function destroy(Request $request)
    {
        /* dd($request->lista); */
        DB::beginTransaction();
        try {
            if ($request->id) {
                DB::table($request->tabla)
                    ->where('id', $request->id)
                    ->update(['status' => '-1']);
                DB::table('logs')->insert([
                    [$request->id_proceso => $request->id, 'nameUser' => $request->nameUser, 'proceso' => $request->proceso]
                ]);
                $documentosController = new DocumentosController;
                $array_image = $documentosController->compruebaSiExisteDocs($request);
                if ($array_image) {
                    File::delete($array_image);
                    DB::commit();
                    return response()->json(['ok' => true]);
                } else {
                    return response()->json(['ok' => false]);
                }
            } else {
                return response()->json(['ok' => false]);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false]);
        }
    }
    public function compruebaSiExisteOneDoc($id_file)
    {
        $nameDocumento = DB::table('documentos')
            ->where('id', $id_file)->get()->pluck('nombre');
        $array_image = $this->funciones->saveImagePath($nameDocumento);
        for ($index = 0; $index < count($array_image); $index++) {
            if (!File::exists($array_image[$index])) {
                return false;
            }
        }
        return $array_image;
    }
    public function updateDocOfUser($documentosController, $id_file, $request_file_upgrade, $tramite)
    {
        //devuelve el path de la imagen es decir la direccion en donde se encuentra
        $array_path_image = $documentosController->compruebaSiExisteOneDoc($id_file);
        if ($array_path_image) {
            //elimina fisicamente el archivo dentro del sistema de archivos
            File::delete($array_path_image);
            $file_upgrade = $request_file_upgrade;
            $filename = time() . ' ' . $file_upgrade->getClientOriginalName();
            //guarda en sistema de archivos
            $file_upgrade->move('uploads/documentos', $filename);
            DB::table('documentos')
                ->where('id', $id_file)
                ->update(['nombre' => $filename]);
            return true;
        } else {
            return false;
        }
    }
    public function actualizarDoc(Request $request)
    {
        /* dd($request->all()); */
        $documentosController = new DocumentosController;
        try {
            if ($request->tramite === 'inscripcion') {
                $response = $documentosController->updateDocOfUser($documentosController, $request->id_file, $request->file('file_upgrade'), $request->tramite);
                if ($response) {
                    return response()->json(['ok' => true, 'result' => 'Documento se actualizo correctamente', 'caci' => 'inscripcion']);
                } else {
                    return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
                }
            } elseif ($request->tramite === 'reinscripcion') {
                $response = $documentosController->updateDocOfUser($documentosController, $request->id_file, $request->file('file_upgrade'), $request->tramite);
                if ($response) {
                    return response()->json(['ok' => true, 'result' => 'Documento se actualizo correctamente', 'caci' => 'reinscripcion']);
                } else {
                    return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
                }
            }
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
        }
    }
}
