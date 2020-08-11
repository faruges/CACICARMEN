<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\CaciMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            //$response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email];
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email,"emailCaci" => $request->email_caci];
            Mail::send('testmail', $response, function ($msj) use ($response) {
                $msj->from($response['emailCaci']);
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
            $emailController = new EmailController;
            $emailController->insertFlagEnvioEmailNotiRecibiReinsc($request->id);
        } catch (\Throwable $th) {
            /* dd($th); */
        }
        /* $nombre_completo = $nombre_tutor. '' . $ap_paterno; 
        $data = ['name'=> $nombre_completo]; */
        //Mail::to('r.afinho17roma@gmail.com')->send(new CaciMail($data)); */
        //Mail::to("'$email'")->send(new CaciMail($data));
        return response()->json();
    }
    public function insertFlagEnvioEmailNotiRecibiReinsc($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado_not_recibida' => 1]);
    }
    public function sendEmailRecibiReinscri(Request $request)
    {
        /* dd($request)->all(); */
        try {
            //$response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email];
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email,"emailCaci" => $request->email_caci];
            Mail::send('info_recibida_reinscripcion', $response, function ($msj) use ($response) {
                $msj->from($response['emailCaci']);
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
                /* $array = array('message' => 'Email Enviado Correctamente');
                $data = json_encode($array); */
            });
            $emailController = new EmailController;
            $emailController->insertFlagEnvioEmailNotiRecibidoReinsReins($request->id);
        } catch (\Throwable $th) {
            dd($th);
            /* $array = array('message' => 'Email No fue Enviado');
            $data = json_encode($array); */
        }
        return response()->json();
    }
    public function insertFlagEnvioEmailNotiRecibidoReinsReins($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado_not_recibida_reinscr' => 1]);
    }
    public function sendEmailRecibiInscrip(Request $request)
    {
        try {
            //aguanta la vara
            //$response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email];
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email,"emailCaci" => $request->email_caci];
            Mail::send('testmail', $response, function ($msj) use ($response) {
                $msj->from($response['emailCaci']);
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
            $emailController = new EmailController;
            $emailController->insertFlagEnvioEmailNotiRecibido($request->id);
        } catch (\Throwable $th) {
            dd($th);
        }
        return response()->json();
    }
    public static function insertFlagEnvioEmailNotiRecibido($id)
    {
        DB::table('inscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado_not_recibida' => 1]);
    }
    public function sendEmailEspera($nombre_tutor, $ap_paterno, $email)
    {
        /* dd($request)->all(); */
        /* dd($nombre_tutor,$ap_paterno,$email); */
    }
}
