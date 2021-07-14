<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class WebServicesRENAPO extends Controller
{
    public function getCurp(Request $request)
    {

        //if ($request->ajax()) {

        $client = new Client();

        //$response = $client->request('GET', 'https://www.curp.cdmx.gob.mx/curp/rest/curp/'.$request->id,

        $response = $client->request(
            'GET',
            'https://www.curp.cdmx.gob.mx/curp/rest/curp/' . $request->curp,
            ['auth' => ['finanzas', 'F1n4nz445!2020'], 'verify' => false]
        );


        //echo $response;


        $data_repuve = $response->getBody();

        //echo $data_repuve;

        $data = json_decode($data_repuve, true);

        //echo var_dump($data);



        $data = array(

            'nombre' => $data['nombres'],

            'apellido1' => $data['apellido1'],

            'apellido2' => $data['apellido2'],

            'fechNac' => $data['fechNac']

        );
        //echo var_dump($data);

        $datas['user'] = $data;
        /* foreach ($data as $d) {
    		echo '<pre>';
    		print_r($d);
    		echo '</pre>';
        } */
        if ($datas['user']['nombre']) {
            $renapoWS = new WebServicesRENAPO;
            $intoCicloEscolar = true;
            if ($request->nombreProceso === "inscripcion") {
                //dd("hay datos",$datas['user']);
                $name_table = 'inscripcion_menor';
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = Inscripcion::where('curp_num', $curp)->get()->count();
                if ($conteoCurp >= 1) {
                    $column_curp = 'curp_num';
                    $intoCicloEscolar = $renapoWS->comparaCiclosEscolares($name_table,$column_curp,$curp,$renapoWS);
                }
            } else if ($request->nombreProceso === "reinscripcion") {
                $name_table = 'reinscripcion_menor';
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = Reinscripcion::where('curp', $curp)->get()->count();
                if ($conteoCurp >= 1) {
                    $column_curp = 'curp';
                    $intoCicloEscolar = $renapoWS->comparaCiclosEscolares($name_table,$column_curp,$curp,$renapoWS);
                }
            }
            if ($conteoCurp <= 0) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else if ($conteoCurp >= 1 && $intoCicloEscolar === false) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else if ($conteoCurp >= 1 && $intoCicloEscolar === true) {
                return response()->json(['ok' => true, 'result' => "No se pudo realizar el proceso, el Menor con curp '$request->curp' ya esta Inscrito", 'Exist' => true]);
            }
        }
        /* return view('prueba_2',compact('datas')); */

        //return $data;

        //}
    }

    public function comparaCiclosEscolares($name_table,$column_curp,$curp,$renapoWS)
    {
        /* $fecha_de_registro = DB::table($name_table)->where('curp_num', $curp)->value('created_at')->orderBy('id','desc'); */
        $data_menor = DB::table($name_table)->where($column_curp, $curp)->orderBy('created_at','desc')->first();
        /* dd($data_menor->created_at); */
        $ciclo_escolar_inscripcion = $renapoWS->getCicloEscolar($data_menor->created_at);
        $ciclo_escolar_now = $renapoWS->getCicloEscolar(date("Y-m-d H:i:s"));
        if ($ciclo_escolar_inscripcion === $ciclo_escolar_now) {
            /* dd("Esta dentro del mismo ciclo, no inscribir"); */
            $intoCicloEscolar = true;
        } else {
            /* dd("diferentes ciclos, si se puede inscribir"); */
            $intoCicloEscolar = false;
        }
        return $intoCicloEscolar;
    }

    public function getCicloEscolar($fecha_de_registro)
    {
        //se agrega el ciclo escolar correspondiente a la fecha de inscripcion
        /* $indice_lista_caci = -1;
        $array_ciclo_escolar = []; */
        /* $array_lista_preins_reins = []; */
        $ciclo_escolar = '';
        /* $array_lista_caci = $lista_caci->toArray(); */
        /* foreach ($lista_caci as $value) { */
        //obtiene la fecha de inscripcion y se descompone por mes y anio
        $fecha = $fecha_de_registro;
        $fecha_explode = explode('-', $fecha);
        $anio = $fecha_explode[0];
        $mes = $fecha_explode[1];
        $dia_with_hora = $fecha_explode[2];
        $dia = explode(' ', $dia_with_hora);
        //constantes que definen el rango del ciclo escolar
        $fecha_ini_escolar = $anio . '-07-01';
        $fecha_final_escolar = (intval($anio) + 1) . '-06-30';
        $pre_fecha_ini_escolar = (intval($anio) - 1) . '-07-01';
        $pre_fecha_final_escolar = $anio . '-06-30';
        //concateno la fecha actual de la inscripcion ojo, ya no tiene la hora
        $fecha_procesada = $anio . '-' . $mes . '-' . $dia[0];
        //dd($fecha_ini_escolar,$fecha_final_escolar,$fecha_procesada,$pre_fecha_ini_escolar,$pre_fecha_final_escolar);
        //primera evaluacion es para las fechas que esten dentro del rango el segundo es el que este un ciclo atras
        if ($fecha_procesada >= $fecha_ini_escolar && $fecha_procesada <= $fecha_final_escolar) {
            //ejemplo(2020-10-10) ciclo escolar 2020-2021
            $int_anio = intval($anio);
            $ciclo_escolar = $anio . "-" . ($int_anio + 1);
            /* $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar); */
            //dd($array_ciclo_escolar);
        } elseif ($fecha_procesada >= $pre_fecha_ini_escolar && $fecha_procesada <= $pre_fecha_final_escolar) {
            //ejemplo(2020-04-10) ciclo escolar 2019-2020
            $int_anio = intval($anio);
            $ciclo_escolar = ($int_anio - 1) . "-" . $anio;
            /* $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar); */
            //dd($array_ciclo_escolar);
        }
        /* $indice_lista_caci = $indice_lista_caci + 1; */
        //avanza al siguiente arreglo en la lista de inscripcion
        /* $array_list_caci_with_cicl_escolar = array_merge($array_lista_caci[$indice_lista_caci],$array_ciclo_escolar); */
        /* array_push($array_lista_preins_reins, $array_list_caci_with_cicl_escolar); */
        /* } */
        return $ciclo_escolar;
    }
}
