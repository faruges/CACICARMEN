<?php

namespace App\Http\Controllers;

use App\Model\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Mail;

use Validator;

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
            foreach ($array['data'] as $key => &$value) {
                if ($value === "0" || is_null($value)) {
                    $value = "DATO NO ENCONTRADO";
                }
            }
            $data['user'] = $array['data'];

            /* return response()->json($data); */
            return view('inscripcion_from', compact('data'));
            //return redirect('/formulario_inscripcion')->with('data', $data);
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
        $rules = [
            'nombre_tutor_madres' => 'required|string',
            'apellido_paterno_tutor' => 'required|string',
            'apellido_materno_tutor' => 'required|string',

            'calle' => 'required|string',
            'numero_domicilio' => 'required|string',
            'colonia' => 'required|string',
            'alcaldia' => 'required|string',
            'codigo_postal' => 'required|numeric',

            'tipo_nomina_1' => 'required|string',
            'num_empleado_1' => 'required|numeric',
            'num_plaza_1' => 'required|numeric',
            'clave_dependencia_1' => 'required|string',
            'nivel_salarial_1' => 'required|string',
            'seccion_sindical_1' => 'required|string',
            'nombre_menor_1' => 'required|string',
            'apellido_paterno_1' => 'required|string',
            'apellido_materno_1' => 'required|string',
            'birthday' => 'required|date',
            'Edad_menor' => 'required|string',
            'caci' => 'required|string',
            'email_correo' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'telefono_celular' => 'required|numeric',
            'telefono_3' => 'required|numeric',
            'filename_act' => 'mimes:pdf,docx|max:2048',
            'filename_sol' => 'mimes:pdf,docx|max:2048',
            'filename_vacu' => 'mimes:pdf,docx|max:2048',
            'filename_nac' => 'mimes:pdf,docx|max:2048',
            'filename_com' => 'mimes:pdf,docx|max:2048',
            'filename_cert' => 'mimes:pdf,docx|max:2048',
            'filename_rec' => 'mimes:pdf,docx|max:2048',
            'filename_disc' => 'mimes:pdf,docx|max:2048',
            'filename_trab' => 'mimes:pdf,docx|max:2048',
            'filename_recp' => 'mimes:pdf,docx|max:2048'
        ];
        $messages = [
            'nombre_tutor_madres.required' => 'Su nombre es requerido',
            'nombre_tutor_madres.string' => 'Su nombre debe ser un texto',
            'apellido_paterno_tutor.required' => 'Su apellido paterno es requerido',
            'apellido_paterno_tutor.string' => 'Su apellido paterno debe ser un texto',
            'apellido_materno_tutor.required' => 'Su apellido materno es requerido',
            'apellido_materno_tutor.string' => 'Su apellido materno debe ser un texto',

            'calle.required' => 'Su calle es requerido',
            'calle.string' => 'Su calle debe ser un texto',
            'numero_domicilio.required' => 'Su numero de domicilio es requerido',
            'numero_domicilio.string' => 'Su numero de domicilio debe ser un texto',
            'colonia.required' => 'Su colonia es requerido',
            'colonia.string' => 'Su colonia debe ser un texto',
            'alcaldia.required' => 'Su alcaldia es requerido',
            'alcaldia.string' => 'Su alcaldia debe ser un texto',
            'codigo_postal.required' => 'Su codigo es requerido',
            'codigo_postal.numeric' => 'Su codigo postal debe ser un número',

            'tipo_nomina_1.required' => 'Su tipo de nomina es requerido',
            'tipo_nomina_1.string' => 'Su tipo de nomina debe ser un texto',
            'num_empleado_1.required' => 'Su numero de empleado es requerido',
            'num_empleado_1.numeric' => 'Su numero de empleado debe ser un número',
            'num_plaza_1.required' => 'Su numero de plaza es requerido',
            'num_plaza_1.numeric' => 'Su numero de plaza debe ser un número',
            'clave_dependencia_1.required' => 'Su clave de dependencia es requerido',
            'clave_dependencia_1.string' => 'Su clave de dependencia debe ser un texto',
            'nivel_salarial_1.required' => 'Su nivel salarial es requerido',
            'nivel_salarial_1.numeric' => 'Su nivel salarial debe ser un número',
            'seccion_sindical_1.required' => 'Su seccion sindical es requerido',
            'seccion_sindical_1.string' => 'Su seccion sindical debe ser un texto',
            'nombre_menor_1.required' => 'El nombre del menor es requerido',
            'nombre_menor_1.string' => 'El nombre del menor debe ser un texto',
            'apellido_paterno_1.required' => 'Su apellido paterno del menor es requerido',
            'apellido_paterno_1.string' => 'Su apellido paterno del menor debe ser un texto',
            'apellido_materno_1.required' => 'Su apellido materno del menor es requerido',
            'apellido_materno_1.string' => 'Su apellido materno del menor debe ser un texto',
            'birthday.required' => 'Su fecha de cumpleaños es requerido',
            'birthday.date' => 'Su fecha de cumpleaños debe ser una fecha',
            'Edad_menor.required' => 'Su edad es requerido',
            'Edad_menor.string' => 'Su edad debe ser texto',
            'caci.required' => 'Su caci es requerido',
            'caci.string' => 'Su caci debe ser string',
            'email.required' => 'Su email es requerido',
            'email.regex' => 'Su email no tiene el formato correcto',
            'telefono_celular.required' => 'Su celular es requerido',
            'telefono_celular.numeric' => 'Su celular debe ser un número',
            'telefono_celular.max' => 'Su celular debe contener 10 digitos',
            'telefono_3.required' => 'Su telefono es requerido',
            'telefono_3.numeric' => 'Su telefono debe ser un número',

            'filename_act.mimes' => 'El acta de nacimiento no es valido',
            'filename_act.max' => 'El acta de nacimiento no debe de exceder en tamaño los 2Mb',
            'filename_sol.mimes' => 'La solicitud de Ingreso no es valido',
            'filename_sol.max' => 'La solicitud de Ingreso no debe de exceder en tamaño los 2Mb',
            'filename_vacu.mimes' => 'La Cartilla de vacunación no es valido',
            'filename_vacu.max' => 'La Cartilla de vacunación no debe de exceder en tamaño los 2Mb',
            'filename_nac.mimes' => 'Certificado de nacimiento no es valido',
            'filename_nac.max' => 'Certificado de nacimiento no debe de exceder en tamaño los 2Mb',
            'filename_com.mimes' => 'Carta compromiso no es valido',
            'filename_com.max' => 'Carta compromiso no debe de exceder en tamaño los 2Mb',
            'filename_cert.mimes' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no es valido',
            'filename_cert.max' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no debe de exceder en tamaño los 2Mb',
            'filename_rec.mimes' => 'Último recibo de pago impreso del(a) trabajador (a). no es valido',
            'filename_rec.max' => 'Último recibo de pago impreso del(a) trabajador (a). no debe de exceder en tamaño los 2Mb',
            'filename_disc.mimes' => 'Copias de los documentos médicos del tratamiento no es valido',
            'filename_disc.max' => 'Copias de los documentos médicos del tratamiento no debe de exceder en tamaño los 2Mb',
            'filename_trab.mimes' => 'Documento de la patria potestad no es valido',
            'filename_trab.max' => 'Documento de la patria potestad no debe de exceder en tamaño los 2Mb',
            'filename_recp.mimes' => 'Copia del último recibo de pago de la persona trabajadora no es valido',
            'filename_recp.max' => 'Copia del último recibo de pago de la persona trabajadora no debe de exceder en tamaño los 2Mb',
        ];
        DB::beginTransaction();

        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect('inscripcion_from')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typelert', 'danger');
            } else {
                $curp = $request->curp_num;
                //contea si ya menor esta inscrito
                $conteoCurp = Inscripcion::where('curp_num', $curp)->get()->count();
                if ($conteoCurp <= 0) {
                    Inscripcion::create($request->all());
                    //obtiene id de reinscripcion
                    $id_reins = Inscripcion::select('id')->orderByDesc('id')->get()->first();
                    $id = $id_reins->id;
                    $filename_act = $request->file('filename_act');
                    //$filename_sol = $request->file('filename_sol');
                    $filename_vacu = $request->file('filename_vacu');
                    $filename_nac = $request->file('filename_nac');
                    $filename_com = $request->file('filename_com');
                    //$filename_cert = $request->file('filename_cert');
                    //$filename_rec = $request->file('filename_rec');
                    /////$filename_disc = $request->file('filename_disc');
                    /////$filename_trab = $request->file('filename_trab');
                    //$filename_recp = $request->file('filename_recp');
                    $filename_disc = (!empty($request->file('filename_disc')) ? $request->file('filename_disc') : null);
                    $filename_trab = (!empty($request->file('filename_trab')) ? $request->file('filename_trab') : null);

                    $arrayFiles = array(
                        array($filename_act, "Acta de nacimiento"), array($filename_vacu, "Cartilla de vacunacion"),
                        array($filename_nac, "Certificado de nacimiento"), array($filename_com, "Curp")/*,
                    array($filename_disc, "Copias de los documentos médicos del tratamiento"),
                    array($filename_trab, "Documento de la patria potestad")*/
                    );

                    if (!empty($filename_disc)) {
                        $arrayFiles[] = array($filename_disc, "Copias de los documentos médicos del tratamiento");
                    }

                    if (!empty($filename_trab)) {
                        $arrayFiles[] = array($filename_trab, "Documento de la patria potestad");
                    }

                    if (Inscripcion::setDoc($arrayFiles, $id)) {

                        $inscripcion = new InscripcionController;
                        $envioEmail = $inscripcion->sendEmail($request->nombre_tutor_madres, $request->apellido_paterno_tutor, $request->email_correo);
                        if ($envioEmail) {
                            Inscripcion::insertFlagEnvioEmail($id);
                            $inscripcion->setRolCaci($id, $request->caci);
                        }
                        //return redirect('inicio');
                        DB::commit();
                        return redirect('inicio')->with('mensaje', "Menor inscrito con exito");
                    } else {
                        return redirect('inscripcion_from')->withErrors($validator)->with('message', 'Se ha producido un error, no se cargaron todos los archivos.')->with('typelert', 'danger');
                    }
                } else {
                    return redirect('inscripcion_from')->withErrors(['', 'No se pudo realizar el proceso de Inscripción, el Menor ya esta Inscrito']);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect('inscripcion_from')->withErrors(['', 'No se pudo realizar la Inscripción']);
        }
    }

    private function sendEmail($nombre_tutor, $ap_paterno, $email)
    {
        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => $email];
            Mail::send('inscripcion_email', $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
            return true;
        } catch (\Throwable $th) {
            return false;
            dd($th);
        }
    }

    private function setRolCaci($id, $rolCaci)
    {
        switch ($rolCaci) {
            case 'Luz Maria Gomez Pezuela':
                $caciLuz = "caciluz";
                Inscripcion::setCaci($id, $caciLuz);
                break;
            case 'Mtra Eva Moreno Sanchez':
                $caciEva = "cacieva";
                Inscripcion::setCaci($id, $caciEva);
                break;
            case 'Bertha Von Glumer Leyva':
                $caciBertha = "cacibertha";
                Inscripcion::setCaci($id, $caciBertha);
                break;
            case 'Carolina Agazzi':
                $caciCarolina = "cacicarolina";
                Inscripcion::setCaci($id, $caciCarolina);
                break;
            case 'Carmen S':
                $caciCarmen = "cacicarmen";
                Inscripcion::setCaci($id, $caciCarmen);
                break;
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
