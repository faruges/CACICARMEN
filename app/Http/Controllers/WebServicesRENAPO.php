<?php

namespace App\Http\Controllers;

use App\Model\InscripcionMenor;
use App\Model\ReinscripcionMenor;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class WebServicesRENAPO extends Controller
{
    public function __construct()
    {
        $this->funciones = new Funciones;
    }

    public function getCurp(Request $request)
    {
        //if ($request->ajax()) {
        /* dd($request->all()); */
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
        if ($datas['user']['nombre']) {
            $isMenorInsideCicloEscolar = true;
            if ($request->nombreProceso === "inscripcion") {
                //dd("hay datos",$datas['user']);
                $name_table = 'inscripcion_menor';
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = InscripcionMenor::where('curp_num', $curp)->where('status', '1')->get()->count();
                $datas['caci'] = null;
                if ($conteoCurp >= 1) {
                    $column_curp = 'curp_num';
                    $isMenorInsideCicloEscolar = $this->funciones->comparaCiclosEscolares($name_table, $column_curp, $curp);
                    if ($isMenorInsideCicloEscolar == true) {
                        $ultimo_ciclo_escolar_menor = InscripcionMenor::orderBy('ciclo_escolar','desc')->where('curp_num', $curp)->pluck('ciclo_escolar')->first();
                    }
                }
            } else if ($request->nombreProceso === "reinscripcion") {

//                dd($request->nombreProceso);
                $name_table = 'reinscripcion_menor';
                $curp = $request->curp;
                //recupera el caci en donde esta inscrito el menor
                $caci_menor_reinscrito = ReinscripcionMenor::where('curp', $curp)->pluck('caci')->first();
                $caci_menor_inscrito = InscripcionMenor::where('curp_num', $curp)->pluck('caci')->first();
                if ($caci_menor_reinscrito) {
                    $datas['caci'] = $caci_menor_reinscrito;
                }
                if ($caci_menor_inscrito) {
                    $datas['caci'] = $caci_menor_inscrito;
                }
                if ($caci_menor_inscrito == null && $caci_menor_reinscrito == null) {
                    $datas['caci'] = null;
                }
                //contea si ya menor esta inscrito
                $conteoCurp = ReinscripcionMenor::where('curp', $curp)->where('status', '1')->get()->count();
//                dd(ReinscripcionMenor::where('curp', $curp)->where('status', '1')->get());

                if ($conteoCurp >= 1) {
                    $column_curp = 'curp';
                    $isMenorInsideCicloEscolar = $this->funciones->comparaCiclosEscolares($name_table, $column_curp, $curp);


                    if ($isMenorInsideCicloEscolar == true) {
                        $ultimo_ciclo_escolar_menor = ReinscripcionMenor::orderBy('ciclo_escolar','desc')->where('curp', $curp)->pluck('ciclo_escolar')->first();
                    }
                }
            }
            if ($conteoCurp <= 0) {
                if ($datas['caci'] == null && $request->nombreProceso === "reinscripcion") {
                    return response()->json(['ok' => true, 'datas' => $datas, 'warning' => true]);
                } else {
                    return response()->json(['ok' => true, 'datas' => $datas]);
                }
            } else if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === false) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === true) {
                return response()->json(['ok' => true, 'result' => "No se pudo realizar el proceso, el Menor con curp '$request->curp' ya esta Inscrito en el ciclo escolar '$ultimo_ciclo_escolar_menor'", 'Exist' => true]);
            }
        }
    }
}
