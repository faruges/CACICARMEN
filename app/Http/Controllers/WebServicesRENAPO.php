<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebServicesRENAPO extends Controller
{
    public function getCurp(Request $request){

        if($request->ajax()){

            $client = new Client();



        //$response = $client->request('GET', 'https://www.curp.cdmx.gob.mx/curp/rest/curp/'.$request->id,

        $response = $client->request('GET', 'https://www.curp.cdmx.gob.mx/curp/rest/curp/'.$request->curp,


                ['auth' => ['finanzas', 'F1n4nz445!2020'],'verify' => false]);


        //echo $response;


        $data_repuve = $response->getBody();

        //echo $data_repuve;

        $data = json_decode($data_repuve,true);

        //echo var_dump($data);



        $data = array(

            'nombre' => $data['nombres'],

            'apellido1' =>$data['apellido1'],

            'apellido2' =>$data['apellido2'],

            'fechNac' =>$data['fechNac']

        );
        //echo var_dump($data);

        $datas['user'] = $data;
        /* foreach ($data as $d) {
    		echo '<pre>';
    		print_r($d);
    		echo '</pre>';
        } */
        
        /* return view('prueba_2',compact('datas')); */
        return response()->json($datas);       
        
        //return $data;

        }    

    }

}
    