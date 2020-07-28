<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

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
        try {
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

        /* return response()->json($data); */
        return view('inscripcion_from', compact('data'));   
        } catch (\Throwable $th) {
            /* dd($th); */
            return redirect('/inscripcion_from')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        /* $rules = [
            'nombre_tutor_madres'=>'required'|'string'];
        $messages = [
                'nombre_tutor_madres.required' => 'Su nombre es requerido',
                'nombre_tutor_madres.string' => 'Su nombre debe ser un texto']; */
        /* $rules = [
            'nombre_tutor_madres'=>'required'|'string',
            'apellido_paterno_tutor'=>'required'|'string',
            'apellido_materno_tutor'=>'required'|'string',
            'domicilio_delegracion'=>'required'|'string',
            'tipo_nomina_1'=>'required'|'numeric',
            'num_empleado_1'=>'required'|'numeric',
            'num_plaza_1'=>'required'|'numeric',
            'clave_dependencia_1'=>'required'|'string',
            'nivel_salarial_1'=>'required'|'numeric',
            'seccion_sindical_1'=>'required'|'numeric',
            'nombre_menor_1'=>'required'|'string',
            'apellido_paterno_1'=>'required'|'string',
            'apellido_materno_1'=>'required'|'string',
            'birthday'=>'required'|'date',
            'Edad_menor'=>'required'|'string',
            'caci'=>'required'|'string'
        ];
        $messages = [
            'nombre_tutor_madres.required' => 'Su nombre es requerido',
            'nombre_tutor_madres.string' => 'Su nombre debe ser un texto',
            'apellido_paterno_tutor.required' => 'Su apellido paterno es requerido',
            'apellido_paterno_tutor.string' => 'Su apellido paterno debe ser un texto',
            'apellido_materno_tutor.required' => 'Su apellido materno es requerido',
            'apellido_materno_tutor.string' => 'Su apellido materno debe ser un texto',
            'domicilio_delegracion.required' => 'Su domicilio es requerido',
            'domicilio_delegracion.string' => 'Su domicilio debe ser un texto',
            'clave_dependencia_1.required' => 'Su clave de dependencia es requerido',
            'clave_dependencia_1.string' => 'Su clave de dependencia debe ser un trxto',
            'nivel_salarial_1.required' => 'Su nivel salarial es requerido',
            'nivel_salarial_1.numeric' => 'Su nivel salarial debe ser un numero',
            'seccion_sindical_1.required' => 'Su seccion sindical es requerido',
            'seccion_sindical_1.numeric' => 'Su seccion sindical debe ser un numero',
            'nombre_menor_1.required' => 'Su seccion sindical es requerido',
            'nombre_menor_1.texto' => 'Su seccion sindical debe ser un texto',
            'apellido_paterno_1.required' => 'Su apellido paterno es requerido',
            'apellido_paterno_1.texto' => 'Su apellido paterno debe ser un texto',
            'apellido_materno_1.required' => 'Su apellido materno es requerido',
            'apellido_materno_1.texto' => 'Su apellido materno debe ser un texto',
            'birthday.required' => 'Su fecha de cumpleaños es requerido',
            'birthday.date' => 'Su fecha de cumpleaños debe ser una fecha',
            'Edad_menor.required' => 'Su edad es requerido',
            'Edad_menor.string' => 'Su edad debe ser texto',
            'caci.required' => 'Su caci es requerido',
            'caci.string' => 'Su caci debe ser string',
        ]; */
        /* $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return back()->withErrors($validator)->with('message','Se ha producido un error.')->with('typelert','danger');
        }else{
            return back()->with('message', "Se ha registrado con Exito");
        } */
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
            $inscripcion = new InscripcionController;
            $inscripcion->sendEmail($request->nombre_tutor_madres, $request->apellido_paterno_tutor, $request->email_correo);
            return redirect('inscripcion_from')->with('mensaje', "Menú creado con exito");
        }
    }

    private function sendEmail($nombre_tutor, $ap_paterno, $email)
    {
        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => 'r.afinho17roma@gmail.com'];
            Mail::send('inscripcion_email', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
        } catch (\Throwable $th) {
            dd($th);
        }
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
