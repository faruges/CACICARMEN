<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
            if($request->nombreProceso === "inscripcion"){
                //dd("hay datos",$datas['user']);
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = Inscripcion::where('curp_num', $curp)->get()->count();
            }else if($request->nombreProceso === "reinscripcion"){
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = Reinscripcion::where('curp', $curp)->get()->count();
            }
            if ($conteoCurp <= 0) {
                return response()->json(['ok' => true, 'datas' => $datas]);
            } else {
                return response()->json(['ok' => true, 'result' => "No se pudo realizar el proceso, el Menor con curp '$request->curp' ya esta Inscrito", 'Exist' => true]);
            }
        }
        /* return view('prueba_2',compact('datas')); */

        //return $data;

        //}
    }
}
