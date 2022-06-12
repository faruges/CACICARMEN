<?php

namespace App\Http\Controllers;

use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use thiagoalessio\TesseractOCR\TesseractOCR;

use Validator;

class ReinscripcionController extends Controller
{
    public function __construct()
    {
        $this->funciones = new Funciones;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reinscripcion.reinscripcion_validar_rfc');
    }

    public function prueba()
    {
        /* echo Pdf::getText(public_path() . "\prueba.pdf"); */
        /* $text = (new Pdf('C:\laragon\bin\git\mingw64\bin'))
            ->setPdf('prueba.pdf')
            ->text();
        dd($text); */
        //Parse pdf file and build necessary objects.
        /* $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile(public_path() . "\uploads\prueba.pdf");
        $text = $pdf->getText();
        dd($text); */
        /* $ocr = new TesseractOCR();
        $ocr->image(public_path() . "\uploads\prueba.jpg");
        $ocr->run(); */
        $tesseract = (new TesseractOCR(public_path() . "\uploads\prueba_2.jpg"))
            ->executable('C:\Program Files\Tesseract-OCR\tesseract.exe')
            ->run();
        dd($tesseract);
    }

    public function getwebservice(Request $request)
    {

        try {
            $isPlatformUnable = $this->funciones->testIfPlatformUnable();
            if ($isPlatformUnable) {
                return redirect('/reinscripcion')->withErrors(['error' => 'La plataforma esta deshabilitada, ya que No son periodos de Reinscripción. Para saber de la fechas, se encuentran en el apartado de Requisitos.']);
            } else {
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
                        $value = "DATO NO ENCONTRADO";
                    }
                }

                foreach ($array['data_adicional'] as $key => &$value) {
                    if ($value === "0" || is_null($value)) {
                        $value = "DATO NO ENCONTRADO";
                    }
                }
                $data_adicional = $array['data_adicional'];
                $data_1 = $array['data'];
                $data['user'] = array_merge($data_adicional, $data_1);

                return view('reinscripcion.reinscripcion_form.blade.php', compact('data'));
            }
        } catch (\Throwable $th) {
            return redirect('/reinscripcion')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
        }
    }

    public function setReinscripcion($request, $validator)
    {
        Reinscripcion::create($request->all());
        //obtiene id de reinscripcion
        $objectReinscripcion = Reinscripcion::select('id', 'created_at')->orderByDesc('id')->get()->first();
        $ciclo_escolar_menor = $this->funciones->getCicloEscolar($objectReinscripcion->created_at);
        $id = $objectReinscripcion->id;
        Reinscripcion::setCicloByIdMenor($id, $ciclo_escolar_menor);
        $filename_vacu = $request->file('filename_vacu');

        $filename_compr_pago = $request->file('filename_compr_pago');

        $filename_disc = (!empty($request->file('filename_disc')) ? $request->file('filename_disc') : null);

        $filename_credencial = $request->file('filename_credencial');
        $filename_gafete = $request->file('filename_gafete');
        $filename_solicitud = $request->file('filename_solicitud');
        $filename_carta = $request->file('filename_carta');
        $filename_sol_anali = $request->file('filename_sol_anali');

        $arrayFiles = array(
            array($filename_vacu, "Cartilla de vacunación"),
            array($filename_compr_pago, "Último Comprobante de pago del Trabajador"),
            array($filename_credencial, "Credencial"),
            array($filename_gafete, "Gafete"),
            array($filename_solicitud, "Solicitud de preinscripción o reinscripción"),
            array($filename_carta, "Carta de autorización"),
            array($filename_sol_anali, "Solicitud de análisis clinicos")
        );

        if (!empty($filename_disc)) {
            $arrayFiles[] = array($filename_disc, "Copias de los documentos médicos del tratamiento");
        }

        if (Reinscripcion::setDoc($arrayFiles, $id)) {
            $envioEmail = $this->funciones->sendEmail($request->nombre_tutor, $request->ap_paterno_t, $request->email, 'reinscripcion.reinscripcion_email');
            if ($envioEmail) {
                Reinscripcion::insertFlagEnvioEmail($id);
                $reinscripcion = new Reinscripcion;
                $this->funciones->setRolCaci($id, $request->caci, $reinscripcion, $reinscripcion);
            }
            return true;
        } else {
            return false;
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
            'rfc' => 'required|string',
            'ap_paterno_t' => 'required|string',
            'ap_materno_t' => 'required|string',

            'horario_laboral_ent' => 'required|string',
            'horario_laboral_sal' => 'required|string',

            'calle' => 'required|string',
            'numero_domicilio' => 'required|string',
            'colonia' => 'required|string',
            'alcaldia' => 'required|string',
            'codigo_postal' => 'required|numeric',

            'tipo_nomina' => 'required|string',
            'num_empleado' => 'required|numeric',
            'num_plaza' => 'required|numeric',
            'clave_dependencia' => 'required|string',
            'nivel_salarial' => 'required|numeric',
            'seccion_sindical' => 'required|string',

            'nombre_menor' => 'required|string',
            'ap_paterno' => 'required|string',
            'ap_materno' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'edad_menor_ingreso' => 'required|string',
            'caci' => 'required|string',

            'email' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'telefono_uno' => 'required|numeric',
            'telefono_dos' => 'required|numeric',
            'unidad_administrativa'=> 'required|string',

            'filename_sol' => 'mimes:pdf,docx|max:2048',
            'filename_vacu' => 'mimes:pdf,docx|max:2048',
            'filename_cert' => 'mimes:pdf,docx|max:2048',
            'filename_rec' => 'mimes:pdf,docx|max:2048',
            'filename_disc' => 'mimes:pdf,docx|max:2048',
            'filename_recp' => 'mimes:pdf,docx|max:2048',
            'filename_compr_pago' => 'mimes:pdf,docx|max:2048',
            'filename_credencial' => 'mimes:pdf,docx|max:2048',
            'filename_gafete' => 'mimes:pdf,docx|max:2048',
            'filename_solicitud' => 'mimes:pdf,docx|max:2048',
            'filename_carta' => 'mimes:pdf,docx|max:2048',
            'filename_sol_anali' => 'mimes:pdf,docx|max:2048',
        ];
        $messages = [
            'nombre_tutor.required' => 'Su nombre es requerido',
            'nombre_tutor.string' => 'Su nombre debe ser un texto',
            'rfc.required' => 'Su nombre es requerido',
            'rfc.string' => 'Su nombre debe ser un texto',
            'ap_paterno_t.required' => 'Su apellido paterno es requerido',
            'ap_paterno_t.string' => 'Su apellido paterno debe ser un texto',
            'ap_materno_t.required' => 'Su apellido materno es requerido',
            'ap_materno_t.string' => 'Su apellido materno debe ser un texto',

            'horario_laboral_ent.required' => 'Su horario de entrada es requerido',
            'horario_laboral_ent.string' => 'Su horario de entrada debe ser un texto',
            'horario_laboral_sal.required' => 'Su horario de salida es requerido',
            'horario_laboral_sal.string' => 'Su horario de salida debe ser un texto',

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
            'unidad_administrativa.required'=> 'Su unidad administrativa es requerida',
            'unidad_administrativa.string'=> 'Su unidad administrativa tiene que ser texto',
            'nombre_menor.required' => 'El nombre del menor es requerido',
            'nombre_menor.string' => 'El nombre del menor debe ser un texto',
            'ap_paterno.required' => 'Su apellido paterno del menor es requerido',
            'ap_paterno.string' => 'Su apellido paterno del menor debe ser un texto',
            'ape_materno.required' => 'Su apellido materno del menor es requerido',
            'ape_materno.string' => 'Su apellido materno del menor debe ser un texto',
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

            'filename_sol.mimes' => 'La solicitud de Ingreso no es valido',
            'filename_sol.max' => 'La solicitud de Ingreso no debe de exceder el tamaño de 2Mb',
            'filename_vacu.mimes' => 'La Cartilla de vacunacion no es valido',
            'filename_vacu.max' => 'La Cartilla de vacunación no debe de exceder el tamaño de 2Mb',
            'filename_cert.mimes' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no es valido',
            'filename_cert.max' => 'Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido no debe de exceder el tamaño de 2Mb',
            'filename_rec.mimes' => 'Último recibo de pago impreso del(a) trabajador (a). no es valido',
            'filename_rec.max' => 'Último recibo de pago impreso del(a) trabajador (a). no debe de exceder el tamaño de 2Mb',
            'filename_disc.mimes' => 'Copias de los documentos médicos del tratamiento no es valido',
            'filename_disc.max' => 'Copias de los documentos médicos del tratamiento no debe de exceder el tamaño de 2Mb',
            'filename_recp.mimes' => 'Copia del último recibo de pago de la persona trabajadora no es valido',
            'filename_recp.max' => 'Copia del último recibo de pago de la persona trabajadora no debe de exceder el tamaño de 2Mb',
            'filename_compr_pago.mimes' => 'Último comprobante de pago del trabajador o trabajadora no es valido.',
            'filename_compr_pago.max' => 'Último comprobante de pago del trabajador o trabajadora no debe de exceder el tamaño de 2Mb',

            'filename_credencial.mimes' => 'Credencial no es valido',
            'filename_credencial.max' => 'Credencial no debe de exceder el tamaño de 2Mb',
            'filename_gafete.mimes' => 'Gafete no es valido',
            'filename_gafete.max' => 'Gafete no debe de exceder el tamaño de 2Mb',
            'filename_solicitud.mimes' => 'Solicitud de preinscripción no es valido',
            'filename_solicitud.max' => 'Solicitud de preinscripción no debe de exceder el tamaño de 2Mb',
            'filename_carta.mimes' => 'Carta de autorización no es valido',
            'filename_carta.max' => 'Carta de autorización no debe de exceder el tamaño de 2Mb',
            'filename_sol_anali.mimes' => 'Solicitud de análisis clinicos no es valido',
            'filename_sol_anali.max' => 'Solicitud de análisis clinicos no debe de exceder el tamaño de 2Mb',
        ];

        DB::beginTransaction();

        try {
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                /* dd("entra aqui"); */
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
                //return redirect('reinscripcion')->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typelert', 'danger');
            } else {
                $reinscripcionController = new ReinscripcionController;
                $curp = $request->curp;
                //contea si ya menor esta inscrito
                $conteoCurp = Reinscripcion::where('curp', $curp)->where('status', '1')->get()->count();
                //si no esta inscrito, procede a guardar la info
                if ($conteoCurp <= 0) {
                    /* dd($request)->all(); */
                    $isSuccesful = $reinscripcionController->setReinscripcion($request, $validator);
                    if ($isSuccesful) {
                        DB::commit();
                        return response()->json(['ok' => true, 'result' => 'Menor reinscrito con exito', 'menor' => $request->nombre_menor]);
                    } else {
                        return response()->json(['ok' => false, 'result' => "Se esta cargando uno o mas Documentos repetidos, se le sugiere volver a cargar todos los Documentos", 'err_valid_docs' => true]);
                    }
                } else if ($conteoCurp >= 1) {
                    //si ya hay un registro verifica que ya sea en otro ciclo escolar para poderlo reinscribir
                    $isMenorInsideCicloEscolar = true;
                    $name_table = 'reinscripcion_menor';
                    $column_curp = 'curp';
                    $isMenorInsideCicloEscolar = $this->funciones->comparaCiclosEscolares($name_table, $column_curp, $curp);
                    if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === false) {
                        //si habia mas de un registro pero en diferente ciclo escolar
                        $isSuccesful = $reinscripcionController->setReinscripcion($request, $validator);
                        if ($isSuccesful) {
                            DB::commit();
                            return response()->json(['ok' => true, 'result' => 'Menor reinscrito con exito', 'menor' => $request->nombre_menor]);
                        } else {
                            return response()->json(['ok' => false, 'result' => "Se esta cargando uno o mas Documentos repetidos, se le sugiere volver a cargar todos los Documentos", 'err_valid_docs' => true]);
                        }
                    } else if ($conteoCurp >= 1 && $isMenorInsideCicloEscolar === true) {
                        return response()->json(['ok' => true, 'result' => "No se puede Reinscribir dos veces en el mismo ciclo escolar", 'Exist' => true]);
                    }
                    //return redirect('reinscripcion')->withErrors(['', 'No se pudo realizar el proceso de Reinscripción, el Menor ya esta Inscrito']);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la Reinscripción']);
        }
    }
}
