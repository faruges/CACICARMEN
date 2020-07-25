<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function sendEmailRecibi()
    {
        /* dd($request)->all(); */

        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => $email];
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
        return redirect('admin/lista_reinscripcion');
    }
    public function sendEmailRecibiInscrip()
    {
        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => $email];
            Mail::send('testmail', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);

            });
        } catch (\Throwable $th) {
            /* dd($th); */
        }
        return redirect('admin/lista_inscripcion');
    }
    public function sendEmailEspera($nombre_tutor, $ap_paterno, $email)
    {
        /* dd($request)->all(); */
        /* dd($nombre_tutor,$ap_paterno,$email); */
    }
}
