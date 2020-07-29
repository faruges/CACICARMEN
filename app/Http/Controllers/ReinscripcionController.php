<?php

namespace App\Http\Controllers;

use App\Model\Documentos;
use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Validator;
use Mail;

class ReinscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reinscripcion_validar_rfc');
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
            $array = json_decode($response, true);
            foreach ($array['data'] as $key => &$value) {
                if ($value === "0" || is_null($value)) {
                    $value = "Dato no encontrado";
                }
            }
            $data['user'] = $array['data'];

            return view('reinscripcion', compact('data'));
        } catch (\Throwable $th) {
            return redirect('/reinscripcion')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
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
        $rules = [
            'nombre_tutor' => 'required|string',
            'ap_paterno_t' => 'required|string',
            'ap_materno_t' => 'required|string',
            'domicilio' => 'required|string',
            'tipo_nomina' => 'required|string',
            'num_empleado' => 'required|numeric',
            'num_plaza' => 'required|numeric',
            'clave_dependencia' => 'required|string',
            'nivel_salarial' => 'required|numeric',
            'seccion_sindical' => 'required|string',

            'matricula' => 'required|string',
            'nombre_menor' => 'required|string',
            'ap_paterno' => 'required|string',
            'ap_materno' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'edad_menor_ingreso' => 'required|string',
            'caci' => 'required|string',

            'email' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'telefono_uno' => 'required|numeric',
            'telefono_dos' => 'required|numeric',

            'filename_act' => 'mimes:pdf,docx',
            'filename_sol' => 'mimes:pdf,docx',
            'filename_vacu' => 'mimes:pdf,docx',
            'filename_nac' => 'mimes:pdf,docx',
            'filename_cert' => 'mimes:pdf,docx',
            'filename_rec' => 'mimes:pdf,docx',
            'filename_disc' => 'mimes:pdf,docx',
            'filename_trab' => 'mimes:pdf,docx',
            'filename_com' => 'mimes:pdf,docx',
            'filename_recp' => 'mimes:pdf,docx'
        ];
        $messages = [
            'nombre_tutor.required' => 'Su nombre es requerido',
            'nombre_tutor.string' => 'Su nombre debe ser un texto',
            'ap_paterno_t.required' => 'Su apellido paterno es requerido',
            'ap_paterno_t.string' => 'Su apellido paterno debe ser un texto',
            'ap_materno_t.required' => 'Su apellido materno es requerido',
            'ap_materno_t.string' => 'Su apellido materno debe ser un texto',
            'domicilio.required' => 'Su domicilio es requerido',
            'domicilio.string' => 'Su domicilio debe ser un texto',
            'tipo_nomina.required' => 'Su tipo de nomina es requerido',
            'tipo_nomina.string' => 'Su tipo de nomina debe ser un texto',
            'num_empleado.required' => 'Su numero de empleado es requerido',
            'num_empleado.numeric' => 'Su numero de empleado debe ser un número',
            'num_plaza.required' => 'Su numero de plaza es requerido',
            'num_plaza.numeric' => 'Su numero de plaza debe ser un número',
            'clave_dependencia.required' => 'Su clave de dependencia es requerido',
            'clave_dependencia.string' => 'Su clave de dependencia debe ser un texto',
            'nivel_salarial.required' => 'Su nivel salarial es requerido',
            'nivel_salarial.numeric' => 'Su nivel salarial debe ser un número',
            'seccion_sindical.required' => 'Su seccion sindical es requerido',
            'seccion_sindical.string' => 'Su seccion sindical debe ser un texto',
            'matricula.required' => 'Su seccion sindical es requerido',
            'matricula.string' => 'Su seccion sindical debe ser un texto',
            'nombre_menor.required' => 'Su seccion sindical es requerido',
            'nombre_menor.string' => 'Su seccion sindical debe ser un texto',
            'ap_paterno.required' => 'Su apellido paterno es requerido',
            'ap_paterno.string' => 'Su apellido paterno debe ser un texto',
            'ape_materno.required' => 'Su apellido materno es requerido',
            'ape_materno.string' => 'Su apellido materno debe ser un texto',
            'fecha_nacimiento.required' => 'Su fecha de cumpleaños es requerido',
            'fecha_nacimiento.date' => 'Su fecha de cumpleaños debe ser una fecha',
            'edad_menor_ingreso.required' => 'Su edad es requerido',
            'edad_menor_ingreso.string' => 'Su edad debe ser texto',
            'caci.required' => 'Su caci es requerido',
            'caci.string' => 'Su caci debe ser string',
            'email.required' => 'Su email es requerido',
            'email.regex' => 'Su email no tiene el formato correcto',
            'telefono_uno.required' => 'Su celular es requerido',
            'telefono_uno.numeric' => 'Su celular debe ser un número',
            'telefono_dos.required' => 'Su telefono es requerido',
            'telefono_dos.numeric' => 'Su telefono debe ser un número',

            'filename_act.mimes' => 'Tu archivo no es valido',
            'filename_sol.mimes' => 'Tu archivo no es valido',
            'filename_vacu.mimes' => 'Tu archivo no es valido',
            'filename_nac.mimes' => 'Tu archivo no es valido',
            'filename_cert.mimes' => 'Tu archivo no es valido',
            'filename_rec.mimes' => 'Tu archivo no es valido',
            'filename_disc.mimes' => 'Tu archivo no es valido',
            'filename_trab.mimes' => 'Tu archivo no es valido',
            'filename_com.mimes' => 'Tu archivo no es valido',
            'filename_recp.mimes' => 'Tu archivo no es valido',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            /* dd("entra aqui"); */
            return redirect('reinscripcion')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typelert', 'danger');
        } else {
            /* dd($request)->all(); */
            Reinscripcion::create($request->all());
            //obtiene id de reinscripcion
            $id_reins = Reinscripcion::select('id')->orderByDesc('id')->get()->first();
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
            if (Reinscripcion::setDoc($arrayFiles, $id)) {
                $reinscripcion = new ReinscripcionController;
                $reinscripcion->sendEmail($request->nombre_tutor, $request->ap_paterno_t, $request->email);
                return redirect('reinscripcion')->with('mensaje', "Menú creado con exito");
            }
        }
    }

    private function sendEmail($nombre_tutor, $ap_paterno, $email)
    {
        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => $email];
            Mail::send('reinscripcion_email', $response, function ($msj) use ($response) {
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
