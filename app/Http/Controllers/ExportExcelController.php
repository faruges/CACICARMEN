<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
	public function index()
	{
		$menor_data = DB::table('inscripcion_menor')->get();
		return view('export_excel')->with('menor_data', $menor_data);
	}

	public function excel()
	{

		$menor_data = DB::table('inscripcion_menor')->get()->toArray();
		$menor_array[] = array('nombre_tutor_madres', 'apellido_paterno_tutor', 'apellido_materno_tutor',  'calle', 'numero_domicilio', 'colonia', 'alcaldia', 'codigo_postal', 'tipo_nomina_1');
		foreach ($menor_data as $menor) {
			$menor_array[] = array(
				'nombre_tutor_madres'  => $menor->nombre_tutor_madres,
				'apellido_paterno_tutor'   => $menor->apellido_paterno_tutor,
				'apellido_materno_tutor'    => $menor->apellido_materno_tutor,
				'calle'  => $menor->calle,
				'numero_domicilio'  => $menor->numero_domicilio,
				'colonia'  => $menor->colonia,
				'alcaldia'  => $menor->alcaldia,
				'codigo_postal'  => $menor->codigo_postal,
				'tipo_nomina_1'   => $menor->tipo_nomina_1
			);
		}

		Excel::create('Datos Menor', function ($excel) use ($menor_array) {
			$excel->setTitle('Datos Menor');
			$excel->sheet('Datos Menor', function ($sheet) use ($menor_array) {
				$sheet->fromArray($menor_array, null, 'A1', false, false);
			});
		})->download('xlsx');
	}
}
