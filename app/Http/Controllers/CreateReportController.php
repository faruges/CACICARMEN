<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class CreateReportController extends Controller
{
    public function excel(Request $request)
	{
		/* dd($request->all()); */
		$ciclo_escolar = $request->ciclo_escolar;
		$tabla = $request->tabla;
		$name_key_foreing_repost = $request->name_key_foreing_repost;
		if ($ciclo_escolar) {
			$menor_data = DB::table($tabla)->get()->where('ciclo_escolar', $ciclo_escolar)->toArray();
			$this->generateExcel($menor_data,$name_key_foreing_repost);
		} else if ($ciclo_escolar==null){
			$menor_data = DB::table($tabla)->get()->toArray();
			$this->generateExcel($menor_data,$name_key_foreing_repost);			
		}		
	}
	private function generateExcel($menor_data,$name_key_foreing_repost){
		try{
			$processPerAuth = [];
			$menor_array = [];
			$array_repost_per_auth[] = array(
				'ciclo_escolar',
				'caci',
				'detec_nutricion',
				'fecha_preins',
				'matricula',
				'grupo_nino',
				'fecha_baja_nino',
				'fecha_cambio_caci',
				'nombre_comple_nino',
				'edad_nino',
				'curp_nino',
				'fecha_nac_nino',
				'genero_nino',
				'entidad_naci_nino',
				'anio_registro_nac_nino',
				'alcaldia_registro_nino',
				'num_acta_nac_nino',
				'libro_act_nac_nino',
				'domicilio_part_nino',
				'numero_domici_nino',
				'colonia_nino',
				'alcaldia_nino',
				'codigo_postal_nino',
				'telefono_recado_nino',
				'discapacidad_nino',
				'padecimiento_nino',
				'necesidades_nino',
				'institucion_nino',
				'derechohabiencia_nino',
				'alergia_nino',
				'grupo_sanguineo',
				'nombre_completo_padre',
				'rfc_padre',
				'curp_padre',
				'genero_padre',
				'entidad_nac_padre',
				'fecha_nac_padre',
				'edad_padre',
				'edo_civil_padre',
				'nivel_escolar_padre',
				'conclusion_nive_esco_padre',
				'parentesco_con_nino',
				'domicilio_calle_padre',
				'numero_domici_padre',
				'colonia_padre',
				'alcaldia_padre',
				'codigo_postal_padre',
				'tel_particular_padre',
				'tel_celular_padre',
				'tel_recados_padre',
				'email_padre',
				'clave_sector_padre',
				'ente_administrativo_padre',
				'nombre_unidad_administrativa_padre',
				'clave_unidad_admin_padre',
				'area_adscripcion_padre',
				'descripcion_puesto_padre',
				'funcion_real_padre',
				'domicilio_calle_laboral_padre',
				'num_laboral_padre',
				'colonia_laboral_padre',
				'alcaldia_laboral_padre',
				'codigo_postal_laboral_padre',
				'telefono_laboral_padre',
				'extension_tel_laboral_padre',
				'tipo_nomina_laboral_padre',
				'num_empleado_laboral_padre',
				'num_plaza_laboral_padre',
				'nivel_salarial_laboral_padre',
				'seccion_sindical_laboral_padre',
				'horario_ent_laboral_padre',
				'horario_sal_laboral_padre',
				'dias_laborales_padre',
				'nombre_segundo_empleo',
				'horario_ent_laboral_segundo_empleo',
				'horario_sal_laboral_segundo_empleo',
				'dias_laborales_segundo_empleo',
				'telefono_laboral_segundo_empleo',
				'extension_tel_laboral_segundo_empleo',
				'domicilio_laboral_segundo_empleo',
				'num_domicilio_laboral_segundo_empleo',
				'colonia_laboral_segundo_empleo',
				'alcaldia_laboral_segundo_empleo',
				'codigo_postal_laboral_segundo_empleo',
				'nombre_comple_person_autorizada',
				'entidad_nac_person_autorizada',
				'fecha_nac_person_autorizada',
				'edad_person_autorizada',
				'genero_person_autorizada',
				'curp_person_autorizada',
				'nivel_escol_person_autorizada',
				'concluido_nivel_esc_person_autorizada',
				'parentesco_nino_person_autorizada',
				'domicilio_calle_person_autorizada',
				'numero_domicilio_person_autorizada',
				'colonia_person_autorizada',
				'alcaldia_person_autorizada',
				'codigo_postal_person_autorizada',
				'tel_particular_person_autorizada',
				'tel_celular_person_autorizada',
				'email_person_autorizada',
				'ocupacion_person_autorizada',
				'domicilio_laboral_calle_person_autorizada',
				'numero_domicilio_laboral_person_autorizada',
				'colonia_laboral_person_autorizada',
				'alcaldia_laboral_person_autorizada',
				'codigo_postal_laboral_person_autorizada',
				'tel_laboral_person_autorizada',
				'extension_tel_laboral_person_autorizada',
				'nombre_comple_person_autorizada_dos',
				'entidad_nac_person_autorizada_dos',
				'fecha_nac_person_autorizada_dos',
				'edad_person_autorizada_dos',
				'genero_person_autorizada_dos',
				'curp_person_autorizada_dos',
				'nivel_escol_person_autorizada_dos',
				'concluido_nivel_esc_person_autorizada_dos',
				'parentesco_nino_person_autorizada_dos',
				'domicilio_calle_person_autorizada_dos',
				'numero_domicilio_person_autorizada_dos',
				'colonia_person_autorizada_dos',
				'alcaldia_person_autorizada_dos',
				'codigo_postal_person_autorizada_dos',
				'tel_particular_person_autorizada_dos',
				'tel_celular_person_autorizada_dos',
				'email_person_autorizada_dos',
				'ocupacion_person_autorizada_dos',
				'domicilio_laboral_calle_person_autorizada_dos',
				'numero_domicilio_laboral_person_autorizada_dos',
				'colonia_laboral_person_autorizada_dos',
				'alcaldia_laboral_person_autorizada_dos',
				'codigo_postal_laboral_person_autorizada_dos',
				'tel_laboral_person_autorizada_dos',
				'extension_tel_laboral_person_autorizada_dos',
			);
			foreach ($menor_data as $key => $menor) {
				$menor_array[] = array(
					'id' => $menor->id,
					'ciclo_escolar' => $menor->ciclo_escolar,
					'caci' => $menor->caci,
					'detec_nutricion' => $menor->detec_nutricion,
					'fecha_preins' => $menor->fecha_preins,
					'matricula' => $menor->matricula,
					'grupo_nino' => $menor->grupo_nino,
					'fecha_baja_nino' => $menor->fecha_baja_nino,
					'fecha_cambio_caci' => $menor->fecha_cambio_caci,
					'nombre_comple_nino' => $menor->nombre_comple_nino,
					'edad_nino' => $menor->edad_nino,
					'curp_nino' => $menor->curp_nino,
					'fecha_nac_nino' => $menor->fecha_nac_nino,
					'genero_nino' => $menor->genero_nino,
					'entidad_naci_nino' => $menor->entidad_naci_nino,
					'anio_registro_nac_nino' => $menor->anio_registro_nac_nino,
					'alcaldia_registro_nino' => $menor->alcaldia_registro_nino,
					'num_acta_nac_nino' => $menor->num_acta_nac_nino,
					'libro_act_nac_nino' => $menor->libro_act_nac_nino,
					'domicilio_part_nino' => $menor->domicilio_part_nino,
					'numero_domici_nino' => $menor->numero_domici_nino,
					'colonia_nino' => $menor->colonia_nino,
					'alcaldia_nino' => $menor->alcaldia_nino,
					'codigo_postal_nino' => $menor->codigo_postal_nino,
					'telefono_recado_nino' => $menor->telefono_recado_nino,
					'discapacidad_nino' => $menor->discapacidad_nino,
					'padecimiento_nino' => $menor->padecimiento_nino,
					'necesidades_nino' => $menor->necesidades_nino,
					'institucion_nino' => $menor->institucion_nino,
					'derechohabiencia_nino' => $menor->derechohabiencia_nino,
					'alergia_nino' => $menor->alergia_nino,
					'grupo_sanguineo' => $menor->grupo_sanguineo,
					'nombre_completo_padre' => $menor->nombre_completo_padre,
					'rfc_padre' => $menor->rfc_padre,
					'curp_padre' => $menor->curp_padre,
					'genero_padre' => $menor->genero_padre,
					'entidad_nac_padre' => $menor->entidad_nac_padre,
					'fecha_nac_padre' => $menor->fecha_nac_padre,
					'edad_padre' => $menor->edad_padre,
					'edo_civil_padre' => $menor->edo_civil_padre,
					'nivel_escolar_padre' => $menor->nivel_escolar_padre,
					'conclusion_nive_esco_padre' => $menor->conclusion_nive_esco_padre,
					'parentesco_con_nino' => $menor->parentesco_con_nino,
					'domicilio_calle_padre' => $menor->domicilio_calle_padre,
					'numero_domici_padre' => $menor->numero_domici_padre,
					'colonia_padre' => $menor->colonia_padre,
					'alcaldia_padre' => $menor->alcaldia_padre,
					'codigo_postal_padre' => $menor->codigo_postal_padre,
					'tel_particular_padre' => $menor->tel_particular_padre,
					'tel_celular_padre' => $menor->tel_celular_padre,
					'tel_recados_padre' => $menor->tel_recados_padre,
					'email_padre' => $menor->email_padre,
					'clave_sector_padre' => $menor->clave_sector_padre,
					'ente_administrativo_padre' => $menor->ente_administrativo_padre,
					'nombre_unidad_administrativa_padre' => $menor->nombre_unidad_administrativa_padre,
					'clave_unidad_admin_padre' => $menor->clave_unidad_admin_padre,
					'area_adscripcion_padre' => $menor->area_adscripcion_padre,
					'descripcion_puesto_padre' => $menor->descripcion_puesto_padre,
					'funcion_real_padre' => $menor->funcion_real_padre,
					'domicilio_calle_laboral_padre' => $menor->domicilio_calle_laboral_padre,
					'num_laboral_padre' => $menor->num_laboral_padre,
					'colonia_laboral_padre' => $menor->colonia_laboral_padre,
					'alcaldia_laboral_padre' => $menor->alcaldia_laboral_padre,
					'codigo_postal_laboral_padre' => $menor->codigo_postal_laboral_padre,
					'telefono_laboral_padre' => $menor->telefono_laboral_padre,
					'extension_tel_laboral_padre' => $menor->extension_tel_laboral_padre,
					'tipo_nomina_laboral_padre' => $menor->tipo_nomina_laboral_padre,
					'num_empleado_laboral_padre' => $menor->num_empleado_laboral_padre,
					'num_plaza_laboral_padre' => $menor->num_plaza_laboral_padre,
					'nivel_salarial_laboral_padre' => $menor->nivel_salarial_laboral_padre,
					'seccion_sindical_laboral_padre' => $menor->seccion_sindical_laboral_padre,
					'horario_ent_laboral_padre' => $menor->horario_ent_laboral_padre,
					'horario_sal_laboral_padre' => $menor->horario_sal_laboral_padre,
					'dias_laborales_padre' => $menor->dias_laborales_padre,
					'nombre_segundo_empleo' => $menor->nombre_segundo_empleo,
					'horario_ent_laboral_segundo_empleo' => $menor->horario_ent_laboral_segundo_empleo,
					'horario_sal_laboral_segundo_empleo' => $menor->horario_sal_laboral_segundo_empleo,
					'dias_laborales_segundo_empleo' => $menor->dias_laborales_segundo_empleo,
					'telefono_laboral_segundo_empleo' => $menor->telefono_laboral_segundo_empleo,
					'extension_tel_laboral_segundo_empleo' => $menor->extension_tel_laboral_segundo_empleo,
					'domicilio_laboral_segundo_empleo' => $menor->domicilio_laboral_segundo_empleo,
					'num_domicilio_laboral_segundo_empleo' => $menor->num_domicilio_laboral_segundo_empleo,
					'colonia_laboral_segundo_empleo' => $menor->colonia_laboral_segundo_empleo,
					'alcaldia_laboral_segundo_empleo' => $menor->alcaldia_laboral_segundo_empleo,
					'codigo_postal_laboral_segundo_empleo' => $menor->codigo_postal_laboral_segundo_empleo
				);
			}
			foreach ($menor_array as $key => $menor) {
				$personasAutorizadas = DB::table('personas_autorizadas')->get()->where($name_key_foreing_repost, $menor['id'])->toArray();
				foreach ($personasAutorizadas as $persona) {
					$person_autorizada[] = array(
						'id' => $persona->datos_repositorio_final_pre_id,
						'nombre_comple_person_autorizada' => $persona->nombre_comple_person_autorizada,
						'entidad_nac_person_autorizada' => $persona->entidad_nac_person_autorizada,
						'fecha_nac_person_autorizada' => $persona->fecha_nac_person_autorizada,
						'edad_person_autorizada' => $persona->edad_person_autorizada,
						'genero_person_autorizada' => $persona->genero_person_autorizada,
						'curp_person_autorizada' => $persona->curp_person_autorizada,
						'nivel_escol_person_autorizada' => $persona->nivel_escol_person_autorizada,
						'concluido_nivel_esc_person_autorizada' => $persona->concluido_nivel_esc_person_autorizada,
						'parentesco_nino_person_autorizada' => $persona->parentesco_nino_person_autorizada,
						'domicilio_calle_person_autorizada' => $persona->domicilio_calle_person_autorizada,
						'numero_domicilio_person_autorizada' => $persona->numero_domicilio_person_autorizada,
						'colonia_person_autorizada' => $persona->colonia_person_autorizada,
						'alcaldia_person_autorizada' => $persona->alcaldia_person_autorizada,
						'codigo_postal_person_autorizada' => $persona->codigo_postal_person_autorizada,
						'tel_particular_person_autorizada' => $persona->tel_particular_person_autorizada,
						'tel_celular_person_autorizada' => $persona->tel_celular_person_autorizada,
						'email_person_autorizada' => $persona->email_person_autorizada,
						'ocupacion_person_autorizada' => $persona->ocupacion_person_autorizada,
						'domicilio_laboral_calle_person_autorizada' => $persona->domicilio_laboral_calle_person_autorizada,
						'numero_domicilio_laboral_person_autorizada' => $persona->numero_domicilio_laboral_person_autorizada,
						'colonia_laboral_person_autorizada' => $persona->colonia_laboral_person_autorizada,
						'alcaldia_laboral_person_autorizada' => $persona->alcaldia_laboral_person_autorizada,
						'codigo_postal_laboral_person_autorizada' => $persona->codigo_postal_laboral_person_autorizada,
						'tel_laboral_person_autorizada' => $persona->tel_laboral_person_autorizada,
						'extension_tel_laboral_person_autorizada' => $persona->extension_tel_laboral_person_autorizada,
					);
				}
				foreach ($person_autorizada as $keyPerson => $person) {
					if ($keyPerson == 0) {
						foreach ($person as $keyPer => &$per) {
							$processPerAuth[$keyPer] = $per;
						}
					} else {
						foreach ($person as $keyPer => &$per) {
							$keyPer .= '_dos';
							$processPerAuth[$keyPer] = $per;
						}
					}
				}
				unset($person_autorizada);
				unset($processPerAuth['id']);
				unset($processPerAuth['id_dos']);
				unset($menor_array[$key]['id']);
				$array_repost_per_auth[] = array_merge($menor_array[$key], $processPerAuth);
			}
			Excel::create('Datos Repositorio', function ($excel) use ($array_repost_per_auth) {
				$excel->setTitle('Datos Repositorio');
				$excel->sheet('Datos Repositorio', function ($sheet) use ($array_repost_per_auth) {
					$sheet->fromArray($array_repost_per_auth, null, 'A1', false, false);
				});
			})->download('xlsx');
		} catch (\Throwable $th) {
			Session::flash('error', '¡Error!, Hubo un error al generar el Reporte');
		}
	}
}
