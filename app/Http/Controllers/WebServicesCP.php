<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebServicesCP extends Controller
{
	public function getCP(Request $request)
	{
		try {
			$CP = $request->CP;
			$tokenId = $request->tokenId;

			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => "10.1.181.9:9003/usuarios/IDcpostal",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"$tokenId\"\n },\n \"data\":\n {\n \"CP\":\"$CP\"\n }\n \n}",
				CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

			));
			$response = curl_exec($ch);
			curl_close($ch);
			/* echo var_dump($response); */

			$array = json_decode($response, true);

			$data['resultado'] = $array['ResultadoSearch'];

			/* $data = array(

				'd_asenta' => $data['d_asenta'],

				'D_mnpio' => $data['D_mnpio']

			); */

			return response()->json($data);
		} catch (\Throwable $th) {
			/* dd($th); */
			return redirect('/inscripcion_from')->withErrors(['error' => 'CP no se encuentra en nuestros registros']);
		}
	}
}
