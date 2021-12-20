<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;

class InscripcionController extends Controller
{
    
    public function __construct()
    {
        $this->funciones = new Funciones;
    }

    public function getwebservice(Request $request)
    {
        try {            
            $isPlatformUnable = $this->funciones->testIfPlatformUnable();            
            if ($isPlatformUnable) {
                return redirect('/preinscripcion_validar_rfc')->withErrors(['error' => 'La plataforma esta deshabilitada, ya que No son periodos de Preinscripción. Para saber de la fechas, se encuentran en el apartado de Requisitos.']);
            } else {
                $RFC = $request->RFC;
                $tokenId = $request->tokenId;
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
                $data['user'] = $array['data'];
                return view('preinscripcion.preinscripcion_form', compact('data'));
            }
        } catch (\Throwable $th) {
            /* dd($th); */
            return redirect('/preinscripcion_validar_rfc')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $rules = [
            'nombre_tutor_madres' => 'required|string',
            'apellido_paterno_tutor' => 'required|string',
            'apellido_materno_tutor' => 'required|string',

            'horario_laboral_ent' => 'required|string',
            'horario_laboral_sal' => 'required|string',

            'calle' => 'required|string',
            'numero_domicilio' => 'required|string',
            'colonia' => 'required|string',
            'alcaldia' => 'required|string',
            'codigo_postal' => 'required|numeric',

            'tipo_nomina_1' => 'required|string',
            'num_empleado_1' => 'required|numeric',
            'num_plaza_1' => 'required|numeric',
            'clave_dependencia_1' => 'required|string',
            'nivel_salarial_1' => 'required|string',
            'seccion_sindical_1' => 'required|string',
            'nombre_menor_1' => 'required|string',
            'apellido_paterno_1' => 'required|string',
            'apellido_materno_1' => 'required|string',
            'birthday' => 'required|date',
            'Edad_menor' => 'required|string',
            'caci' => 'required|string',
            'email_correo' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'telefono_celular' => 'required|numeric',
            'telefono_3' => 'required|numeric',
            'filename_act' => 'mimes:pdf,docx|max:2048',
            'filename_sol' => 'mimes:pdf,docx|max:2048',
            'filename_vacu' => 'mimes:pdf,docx|max:2048',
            'filename_nac' => 'mimes:pdf,docx|max:2048',
            'filename_com' => 'mimes:pdf,docx|max:2048',
            'filename_cert' => 'mimes:pdf,docx|max:2048',
            'filename_rec' => 'mimes:pdf,docx|max:2048',
            'filename_disc' => 'mimes:pdf,docx|max:2048',
            'filename_trab' => 'mimes:pdf,docx|max:2048',
            'filename_recp' => 'mimes:pdf,docx|max:2048',
            'filename_compr_pago' => 'mimes:pdf,docx|max:2048'
        ];
        $messages = [
            'nombre_tutor_madres.required' => 'Su nombre es requerido',
            'nombre_tutor_madres.string' => 'Su nombre debe ser un texto',
            'apellido_paterno_tutor.required' => 'Su apellido paterno es requerido',
            'apellido_paterno_tutor.string' => 'Su apellido paterno debe ser un texto',
            'apellido_materno_tutor.required' => 'Su apellido materno es requerido',
            'apellido_materno_tutor.string' => 'Su apellido materno debe ser un texto',

            'calle.required' => 'Su calle es requerido',
            'calle.string' => 'Su calle debe ser un texto',
            'numero_domicilio.required' => 'Su numero de domicilio es requerido',
            'numero_domicilio.string' => 'Su numero de domicilio debe ser un texto',
            'colonia.required' => 'Su colonia es requerido',
            'colonia.string' => 'Su colonia debe ser un texto',
            'alcaldia.required' => 'Su alcaldia es requerido',
            'alcaldia.string' => 'Su alcaldia debe ser un texto',
            'codigo_postal.required' => 'Su codigo es requerido',
            'codigo_postal.numeric' => 'Su codigo postal debe ser un número',

            'horario_laboral_ent.required' => 'Su horario de entrada es requerido',
            'horario_laboral_ent.string' => 'Su horario de entrada debe ser un texto',
            'horario_laboral_sal.required' => 'Su horario de salida es requerido',
            'horario_laboral_sal.string' => 'Su horario de salida debe ser un texto',

            'tipo_nomina_1.required' => 'Su tipo de nomina es requerido',
            'tipo_nomina_1.string' => 'Su tipo de nomina debe ser un texto',
            'num_empleado_1.required' => 'Su numero de empleado es requerido',
            'num_empleado_1.numeric' => 'Su numero de empleado debe ser un número',
            'num_plaza_1.required' => 'Su numero de plaza es requerido',
            'num_plaza_1.numeric' => 'Su numero de plaza debe ser un número',
            'clave_dependencia_1.required' => 'Su clave de dependencia es requerido',
            'clave_dependencia_1.string' => 'Su clave de dependencia debe ser un texto',
            'nivel_salarial_1.required' => 'Su nivel salarial es requerido',
            'nivel_salarial_1.numeric' => 'Su nivel salarial debe ser un número',
            'seccion_sindical_1.required' => 'Su seccion sindical es requerido',
            'seccion_sindical_1.string' => 'Su seccion sindical debe ser un texto',
            'nombre_menor_1.required' => 'El nombre del menor es requerido',
            'nombre_menor_1.string' => 'El nombre del menor debe ser un texto',
            'apellido_paterno_1.required' => 'Su apellido paterno del menor es requerido',
            'apellido_paterno_1.string' => 'Su apellido paterno del menor debe ser un texto',
            'apellido_materno_1.required' => 'Su apellido materno del menor es requerido',
            'apellido_materno_1.string' => 'Su apellido materno del menor debe ser un texto',
            'birthday.required' => 'Su fecha de cumpleaños es requerido',
            'birthday.date' => 'Su fecha de cumpleaños debe ser una fecha',
            'Edad_menor.required' => 'Su edad es requerido',
            'Edad_menor.string' => 'Su edad debe ser texto',
            'caci.required' => 'Su caci es requerido',
            'caci.string' => 'Su caci debe ser string',
            'email_correo.required' => 'Su email es requerido',
            'email_correo.regex' => 'Su email no tiene el formato correcto',
            'telefono_celular.required' => 'Su celular es requerido',
            'telefono_celular.numeric' => 'Su celular debe ser un número',
            'telefono_celular.max' => 'Su celular debe contener 10 digitos',
            'telefono_3.required' => 'Su telefono es requerido',
            'telefono_3.numeric' => 'Su telefono debe ser un número',

            'filename_act.mimes' => 'El acta de nacimiento no es valido',
            'filename_act.max' => 'El acta de nacimiento no debe de exceder el tamaño de 2Mb',
            'filename_sol.mimes' => 'La solicitud de Ingreso no es valido',
            'filename_sol.max' => 'La solicitud de Ingreso no debe de exceder el tamaño de 2Mb',
            'filename_vacu.mimes' => 'La Cartilla de vacunación no es valido',
            'filename_vacu.max' => 'La Cartilla de vacunación no debe de exceder el tamaño de 2Mb',
            'filename_nac.mimes' => 'Certificado de nacimiento no es valido',
            'filename_nac.max' => 'Certificado de nacimiento no debe de exceder el tamaño de 2Mb',
            'filename_com.mimes' => 'CURP no es valido',
            'filename_com.max' => 'CURP no debe de exceder el tamaño de 2Mb',
            'filename_cert.mimes' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no es valido',
            'filename_cert.max' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no debe de exceder el tamaño de 2Mb',
            'filename_rec.mimes' => 'Último recibo de pago impreso del(a) trabajador (a). no es valido',
            'filename_rec.max' => 'Último recibo de pago impreso del(a) trabajador (a). no debe de exceder el tamaño de 2Mb',
            'filename_disc.mimes' => 'Copias de los documentos médicos del tratamiento no es valido',
            'filename_disc.max' => 'Copias de los documentos médicos del tratamiento no debe de exceder el tamaño de 2Mb',
            'filename_trab.mimes' => 'Documento de la patria potestad no es valido',
            'filename_trab.max' => 'Documento de la patria potestad no debe de exceder el tamaño de 2Mb',
            'filename_recp.mimes' => 'Copia del último recibo de pago de la persona trabajadora no es valido',
            'filename_recp.max' => 'Copia del último recibo de pago de la persona trabajadora no debe de exceder el tamaño de 2Mb',
            'filename_compr_pago.mimes' => 'Último comprobante de pago del trabajador o trabajadora no es valido.',
            'filename_compr_pago.max' => 'Último comprobante de pago del trabajador o trabajadora no debe de exceder el tamaño de 2Mb',
        ];
        DB::beginTransaction();

        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                //return redirect('inscripcion_from')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typelert', 'danger');
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                $curp = $request->curp_num;
                //contea si ya menor esta inscrito
                $conteoCurp = Inscripcion::where('curp_num', $curp)->where('status', '1')->get()->count();
                if ($conteoCurp <= 0) {
                    Inscripcion::create($request->all());
                    //obtiene id de reinscripcion
                    $objectInscripcion = Inscripcion::select('id', 'created_at')->orderByDesc('id')->get()->first();            
                    $ciclo_escolar_menor = $this->funciones->getCicloEscolar($objectInscripcion->created_at);
                    $id = $objectInscripcion->id;
                    Inscripcion::setCicloByIdMenor($id, $ciclo_escolar_menor);
                    $filename_act = $request->file('filename_act');
                    //$filename_sol = $request->file('filename_sol');
                    $filename_vacu = $request->file('filename_vacu');
                    $filename_nac = $request->file('filename_nac');
                    $filename_com = $request->file('filename_com');
                    $filename_compr_pago = $request->file('filename_compr_pago');
                    //$filename_cert = $request->file('filename_cert');
                    //$filename_rec = $request->file('filename_rec');
                    /////$filename_disc = $request->file('filename_disc');
                    /////$filename_trab = $request->file('filename_trab');
                    //$filename_recp = $request->file('filename_recp');
                    $filename_disc = (!empty($request->file('filename_disc')) ? $request->file('filename_disc') : null);
                    $filename_trab = (!empty($request->file('filename_trab')) ? $request->file('filename_trab') : null);

                    $arrayFiles = array(
                        array($filename_act, "Acta de nacimiento"), array($filename_vacu, "Cartilla de vacunación"),
                        array($filename_nac, "Certificado de nacimiento"), array($filename_com, "Curp"), array($filename_compr_pago, "Último Comprobante de pago del Trabajador")
                        /*,array($filename_disc, "Copias de los documentos médicos del tratamiento"),
                        array($filename_trab, "Documento de la patria potestad")*/
                    );

                    if (!empty($filename_disc)) {
                        $arrayFiles[] = array($filename_disc, "Copias de los documentos médicos del tratamiento");
                    }

                    if (!empty($filename_trab)) {
                        $arrayFiles[] = array($filename_trab, "Documento de la patria potestad");
                    }

                    if (Inscripcion::setDoc($arrayFiles, $id)) {            
                        $envioEmail = $this->funciones->sendEmail($request->nombre_tutor_madres, $request->apellido_paterno_tutor, $request->email_correo,'preinscripcion.inscripcion_email');
                        if ($envioEmail) {
                            Inscripcion::insertFlagEnvioEmail($id);
                            $inscripcion = new Inscripcion;
                            $this->funciones->setRolCaci($id, $request->caci,$inscripcion);
                        }
                        //return redirect('inicio');
                        DB::commit();
                        return response()->json(['ok' => true, 'result' => 'Menor inscrito con exito', 'menor' => $request->nombre_menor_1]);
                        //return redirect('inicio')->with('mensaje', "Menor inscrito con exito");
                    } else {
                        //return redirect('inscripcion_from')->withErrors($validator)->with('message', 'Se ha producido un error, no se cargaron todos los archivos.')->with('typelert', 'danger');
                        return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid_docs' => true]);
                    }
                } else {
                    return response()->json(['ok' => true, 'result' => "No se pudo realizar el proceso de Inscripción, el Menor con curp '$request->curp_num' ya esta Inscrito", 'Exist' => true]);
                    //return redirect('inscripcion_from')->withErrors(['', 'No se pudo realizar el proceso de Inscripción, el Menor ya esta Inscrito']);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la Inscripción']);
            //return redirect('inscripcion_from')->withErrors(['', 'No se pudo realizar la Inscripción']);
        }
    }
}
