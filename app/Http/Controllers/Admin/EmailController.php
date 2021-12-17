<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class EmailController extends Controller
{    
    //envia un email al padre o tutor para avisarle que sus datos se empezaran a validar en reinscripcion
    public function sendEmailRecibi(Request $request)
    {
        /* dd($request)->all(); */
        try {
            //$response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email];
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email,"emailCaci" => $request->email_caci];
            Mail::send('admin.mail_in_revision', $response, function ($msj) use ($response) {
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
        return response()->json();
    }
    //envia un email al padre o tutor para avisarle que sus datos se empezaran a validar en preinscripcion
    public function sendEmailRecibiInscrip(Request $request)
    {
        try {
            //aguanta la vara
            //$response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email];
            $response = ["nombre" => $request->nombre . ' ' . $request->ape_paterno, "email" => $request->email,"emailCaci" => $request->email_caci];
            Mail::send('admin.mail_in_revision', $response, function ($msj) use ($response) {
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
    //funcion que no se utiliza pero a lo mejor prox.
    public function insertFlagEnvioEmailNotiRecibiReinsc($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado_not_recibida' => 1]);
    }
    //funcion que no se utiliza pero a lo mejor prox.
    public function insertFlagEnvioEmailNotiRecibidoReinsReins($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado_not_recibida_reinscr' => 1]);
    }
    //esta funcion no se utiliza
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
}
