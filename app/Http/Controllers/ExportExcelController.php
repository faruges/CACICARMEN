<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use App\Model\Inscripcion;
use Illuminate\Http\Request;
use DB;
use Excel;
use Illuminate\Support\Facades\Session;

class ExportExcelController extends Controller
{
	public function index()
	{
		$menor_data = DB::table('inscripcion_menor')->get();
		return view('export_excel')->with('menor_data', $menor_data);
	}

	public function findMenoresPorCicloEscolar($array_menor)
	{
		$adminController = new AdminController;
		$menoresPorCicloEscolar = $adminController->showCicloEscolar($array_menor);
		return $menoresPorCicloEscolar;
	}

	public function excel(Request $request)
	{
		/* dd($request->excel_ciclo_escolar); */
		$excelController = new ExportExcelController;
		if (Session::get('rolName') === 'super_caci') {
			$menor_data = Inscripcion::get();
			/* $menor_data = DB::table('inscripcion_menor')->get(); */
			/* dd($menor_data); */
			$menor_data = $excelController->findMenoresPorCicloEscolar($menor_data);
		} else {
			$menor_data = Inscripcion::where('rol_caci', Session::get('rolName'))->get();
			/* $menor_data = DB::table('inscripcion_menor')->where('rol_caci', Session::get('rolName'))->get(); */
			/* dd($menor_data); */
			$menor_data = $excelController->findMenoresPorCicloEscolar($menor_data);
		}
		$menor_array[] = array(
			'caci', 'nombre_tutor', 'apellido_paterno_tutor', 'apellido_materno_tutor',  'calle', 'numero_domicilio', 'colonia', 'alcaldia', 'codigo_postal', 'tipo_nomina',
			'numero_empleado', 'numero_plaza', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'horario_laboral_entrada', 'horario_laboral_salida',
			'email', 'telefono_uno', 'telefono_dos', 'nombre_menor', 'apellido_paterno_menor', 'apellido_materno_menor', 'edad_menor', 'curp'
		);
		$ciclo_escolar = $request->excel_ciclo_escolar;
		foreach ($menor_data as $menor) {
			/* dd($menor); */
			if ($menor['ciclo_escolar'] == $ciclo_escolar) {
				$menor_array[] = array(
					'caci'   => $menor['caci'],
					'nombre_tutor'  => $menor['nombre_tutor_madres'],
					'apellido_paterno_tutor'   => $menor['apellido_paterno_tutor'],
					'apellido_materno_tutor'    => $menor['apellido_materno_tutor'],
					'calle'  => $menor['calle'],
					'numero_domicilio'  => $menor['numero_domicilio'],
					'colonia'  => $menor['colonia'],
					'alcaldia'  => $menor['alcaldia'],
					'codigo_postal'  => $menor['codigo_postal'],
					'tipo_nomina'   => $menor['tipo_nomina_1'],
					'numero_empleado'   => $menor['num_empleado_1'],
					'numero_plaza'   => $menor['num_plaza_1'],
					'clave_dependencia'   => $menor['clave_dependencia_1'],
					'nivel_salarial'   => $menor['nivel_salarial_1'],
					'seccion_sindical'   => $menor['seccion_sindical_1'],
					'horario_laboral_entrada'   => $menor['horario_laboral_ent'],
					'horario_laboral_salida'   => $menor['horario_laboral_sal'],
					'email'   => $menor['email_correo'],
					'telefono_uno'   => $menor['telefono_celular'],
					'telefono_dos'   => $menor['telefono_3'],
					'nombre_menor'   => $menor['nombre_menor_1'],
					'apellido_paterno_menor'   => $menor['apellido_paterno_1'],
					'apellido_materno_menor'   => $menor['apellido_materno_1'],
					'edad_menor'   => $menor['Edad_menor'],
					'curp'   => $menor['curp_num']
				);		
			}
		}		
		return response()->json(['result'=>Excel::create('Datos Menor', function ($excel) use ($menor_array) {
			$excel->setTitle('Datos Menor');
			$excel->sheet('Datos Menor', function ($sheet) use ($menor_array) {
				$sheet->fromArray($menor_array, null, 'A1', false, false);
			});
		})->download('xlsx')]);
	}
}
