<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
                $conteoCurp = Inscripcion::where('curp_num', $curp)->where('status', '1')->get()->count();
                if ($conteoCurp >= 1) {
                    $column_curp = 'curp_num';
                    $isMenorInsideCicloEscolar = $this->funciones->comparaCiclosEscolares($name_table,$column_curp,$curp);                    
                }
            } else if ($request->nombreProceso === "reinscripcion") {
                $name_table = 'reinscripcion_menor';
                $curp = $request->curp;
                //recupera el caci en donde esta inscrito el menor
                $caci_menor_inscrito = Inscripcion::where('curp_num', $curp)->pluck('caci')->first();
                $datas['caci'] = $caci_menor_inscrito;
                //contea si ya menor esta inscrito
                $conteoCurp = Reinscripcion::where('curp', $curp)->where('status', '1')->get()->count();
                if ($conteoCurp >= 1) {
                    $column_curp = 'curp';
                    $isMenorInsideCicloEscolar = $this->funciones->comparaCiclosEscolares($name_table,$column_curp,$curp);
                }
            }
            if ($conteoCurp <= 0) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === false) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === true) {
                return response()->json(['ok' => true, 'result' => "No se pudo realizar el proceso, el Menor con curp '$request->curp' ya esta Inscrito", 'Exist' => true]);
            }
        }
    }
}
