<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function sendEmailRecibi(Request $request)
    {
        /* dd($request)->all(); */
        try {
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => 'r.afinho17roma@gmail.com'];
            Mail::send('testmail', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
        } catch (\Throwable $th) {
            /* dd($th); */
        }
        /* $nombre_completo = $nombre_tutor. '' . $ap_paterno; 
        $data = ['name'=> $nombre_completo]; */
        //Mail::to('r.afinho17roma@gmail.com')->send(new CaciMail($data)); */
        //Mail::to("'$email'")->send(new CaciMail($data));
        return response()->json();
    }
    public function sendEmailRecibiReinscri(Request $request)
    {
        /* dd($request)->all(); */
        try {
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => 'r.afinho17roma@gmail.com'];
            Mail::send('info_recibida_reinscripcion', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
                /* $array = array('message' => 'Email Enviado Correctamente');
                $data = json_encode($array); */
            });
        } catch (\Throwable $th) {
            /* $array = array('message' => 'Email No fue Enviado');
            $data = json_encode($array); */
        }
        return response()->json();
    }
    public function sendEmailRecibiInscrip(Request $request)
    {
        try {
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => 'r.afinho17roma@gmail.com'];
            Mail::send('testmail', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
        } catch (\Throwable $th) {
            /* dd($th); */
        }
        return response()->json();
    }
    public function sendEmailEspera($nombre_tutor, $ap_paterno, $email)
    {
        /* dd($request)->all(); */
        /* dd($nombre_tutor,$ap_paterno,$email); */
    }
}
