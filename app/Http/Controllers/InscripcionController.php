<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscripcion_validar_rfc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getwebservice(Request $request)
    {

        $RFC = $request->RFC;
        $tokenId = $request->tokenId;

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
            CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"$tokenId\"\n },\n \"data\":\n {\n \"RFC\":\"$RFC\"\n }\n \n}",
            CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

        ));
        $response = curl_exec($ch);
        curl_close($ch);

        $array = json_decode($response, true);
        $data['user'] = $array['data'];

        return view('inscripcion_from',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        /* dd($request)->all(); */
        Inscripcion::create($request->all());
        //obtiene id de reinscripcion
        $id_reins = Inscripcion::select('id')->orderByDesc('id')->get()->first();
        $id = $id_reins->id;
        $filename_act = $request->file('filename_act');
        $filename_sol = $request->file('filename_sol');
        $filename_vacu = $request->file('filename_vacu');
        $filename_nac = $request->file('filename_nac');
        $filename_cert = $request->file('filename_cert');
        $filename_rec = $request->file('filename_rec');
        $filename_disc = $request->file('filename_disc');
        $filename_trab = $request->file('filename_trab');
        $filename_com = $request->file('filename_com');
        $filename_recp = $request->file('filename_recp');

        $arrayFiles = array(
            $filename_act, $filename_sol, $filename_vacu, $filename_nac, $filename_cert, $filename_rec, $filename_disc, $filename_trab, $filename_com, $filename_recp
        );
        if (Inscripcion::setDoc($arrayFiles, $id)) {
            return redirect('inscripcion_from')->with('mensaje', "Menú creado con exito");
        }
        /* dd("si llega aca"); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
