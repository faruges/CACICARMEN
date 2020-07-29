<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebService extends Controller
{
	public function getwebservice()
	{

		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => "10.1.181.9:9003/usuarios/loadUserCASI",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"SistemaDeRpueba4as4x4vdlsad\"\n },\n \"data\":\n {\n \"RFC\":\"SAGD891012EA5\"\n }\n \n}",
			CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

		));
		$response = curl_exec($ch);
		curl_close($ch);

		/* $array = json_decode($response, true);
		$data = [];
		$data['user'] = $array;
		echo var_dump($data['user']); */

		$array = json_decode($response, true);
		/* $data = var_dump($array['data']); */
		foreach ($array['data'] as $key => &$value) {
			if ($value === "0") {
				$value = "Dato no encontrado";
				/* echo var_dump($key, $value); */
			}
		}
		foreach ($array['data'] as $key => $value) {
			echo var_dump($key, $value);
		}
		//$info = var_dump($data);
		//echo $info->PUESTO;

		/* return view('reinscripcion'); */
	}
}
