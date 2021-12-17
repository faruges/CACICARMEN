<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use DB;
use Excel;
use Illuminate\Support\Facades\Session;

class ExportExcelReinsController extends Controller
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
		$excelController = new ExportExcelController;
		if (Session::get('rolName') === 'super_caci') {
			$menor_data = DB::table('reinscripcion_menor')->get()->toArray();
			$menor_data = $excelController->findMenoresPorCicloEscolar($menor_data);
		} else {
			$menor_data = DB::table('reinscripcion_menor')->where('rol_caci', Session::get('rolName'))->get()->toArray();
			$menor_data = $excelController->findMenoresPorCicloEscolar($menor_data);
		}
		$menor_array[] = array(
			'caci', 'nombre_tutor', 'ape_paterno_t', 'ap_materno_t', 'calle', 'numero_domicilio', 'colonia', 'alcaldia', 'codigo_postal', 'tipo_nomina',
			'numero_empleado', 'numero_plaza', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'horario_laboral_entrada', 'horario_laboral_salida',
			'email', 'telefono_uno', 'telefono_dos', 'nombre_menor', 'apellido_paterno_menor', 'apellido_materno_menor', 'edad_menor', 'curp'
		);
		$ciclo_escolar = $request->excel_ciclo_escolar;
		foreach ($menor_data as $menor) {
			if ($menor->ciclo_escolar === $ciclo_escolar) {
				$menor_array[] = array(
					'caci' => $menor->caci,
					'nombre_tutor'  => $menor->nombre_tutor,
					'ape_paterno_t'   => $menor->ap_paterno_t,
					'ap_materno_t'    => $menor->ap_materno_t,
					'calle'  => $menor->calle,
					'numero_domicilio'  => $menor->numero_domicilio,
					'colonia'  => $menor->colonia,
					'alcaldia'  => $menor->alcaldia,
					'codigo_postal'  => $menor->codigo_postal,
					'tipo_nomina'   => $menor->tipo_nomina,
					'numero_empleado'   => $menor->num_empleado,
					'numero_plaza'   => $menor->num_plaza,
					'clave_dependencia'   => $menor->clave_dependencia,
					'nivel_salarial'   => $menor->nivel_salarial,
					'seccion_sindical'   => $menor->seccion_sindical,
					'horario_laboral_entrada'   => $menor->horario_laboral_ent,
					'horario_laboral_salida'   => $menor->horario_laboral_sal,
					'email'   => $menor->email,
					'telefono_uno'   => $menor->telefono_uno,
					'telefono_dos'   => $menor->telefono_dos,
					'nombre_menor'   => $menor->nombre_menor,
					'apellido_paterno_menor'   => $menor->ap_paterno,
					'apellido_materno_menor'   => $menor->ap_materno,
					'edad_menor'   => $menor->edad_menor_ingreso,
					'curp'   => $menor->curp
				);
			}
		}
		Excel::create('Datos Menor', function ($excel) use ($menor_array) {
			$excel->setTitle('Datos Menor');
			$excel->sheet('Datos Menor', function ($sheet) use ($menor_array) {
				$sheet->fromArray($menor_array, null, 'A1', false, false);
			});
		})->download('xlsx');
		return response()->json(['ok' => true, 'result' => 'Se obtuvo los datos correctamente']);
	}
}
