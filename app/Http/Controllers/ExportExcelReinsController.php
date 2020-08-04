<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelReinsController extends Controller
{
    public function index()
    {
    	$menor_data = DB::table('inscripcion_menor')->get();
     	return view('export_excel')->with('menor_data', $menor_data);
    }

    public function excel()
    {

    	$menor_data = DB::table('reinscripcion_menor')->get()->toArray();
    	$menor_array[] = array('nombre_tutor', 'ape_paterno_t', 'ap_materno_t', 'calle','numero_domicilio', 'colonia','alcaldia','codigo_postal','tipo_nomina');
     	foreach($menor_data as $menor)
     	{
     		$menor_array[] = array(
       		'nombre_tutor'  => $menor->nombre_tutor,
       		'ape_paterno_t'   => $menor->ap_paterno_t,
       		'ap_materno_t'    => $menor->ap_materno_t,
       		'calle'  => $menor->calle,
       		'numero_domicilio'  => $menor->numero_domicilio,
       		'colonia'  => $menor->colonia,
       		'alcaldia'  => $menor->alcaldia,
       		'codigo_postal'  => $menor->codigo_postal,
       		'tipo_nomina'   => $menor->tipo_nomina
       	);
       	}

       	Excel::create('Datos Menor', function($excel) use ($menor_array){
      		$excel->setTitle('Datos Menor');
      		$excel->sheet('Datos Menor', function($sheet) use ($menor_array){
       			$sheet->fromArray($menor_array, null, 'A1', false, false);
      		});
     	})->download('xlsx');
    }

}
