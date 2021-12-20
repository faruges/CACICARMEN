<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Mail;

class Funciones extends Controller
{
    public function testIfPlatformUnable()
    {
        $fecha_preinscripcion = null;
        $fecha_limite_preinscripcion = null;
        $fecha_ini_preins_prorroga = null;
        $fecha_limite_preins_prorroga = null;
        $fecha_hour_hoy = now();
        $desc_fecha = explode(':', $fecha_hour_hoy);
        $desc_fecha = explode(' ', $desc_fecha[0]);
        /* $fecha_now = $desc_fecha[0]; */
        $fecha_now = '2021-08-02';
        $date = explode('-', $fecha_now);
        $moth = intval($date[1]);
        if ($moth >= 1 && $moth <= 8) {
            $fecha_preinscripcion = $date[0] . '-07-19';
            $fecha_limite_preinscripcion = $date[0] . '-07-30';
            $fecha_ini_preins_prorroga = $date[0] . '-08-02';
            $fecha_limite_preins_prorroga = $date[0] . '-08-13';
        } else if ($moth >= 9 && $moth <= 12) {
            $int_date = intval($date[0]);
            $int_date = $int_date + 1;
            $fecha_preinscripcion = $int_date . '-07-19';
            $fecha_limite_preinscripcion = $int_date . '-07-30';
            $fecha_ini_preins_prorroga = $int_date . '-08-02';
            $fecha_limite_preins_prorroga = $int_date . '-08-13';
        }
        if (($fecha_now < $fecha_preinscripcion && $fecha_now < $fecha_ini_preins_prorroga) || ($fecha_now > $fecha_limite_preinscripcion && $fecha_now > $fecha_limite_preins_prorroga) || ($fecha_now > $fecha_limite_preinscripcion && $fecha_now < $fecha_ini_preins_prorroga)) {
            return true;
        } else {
            return false;
        }
    }

    public function getCicloEscolar($ciclo_escolar_global)
    {
        $fecha = $ciclo_escolar_global;
        $fecha_explode = explode('-', $fecha);
        $anio = $fecha_explode[0];
        $mes = $fecha_explode[1];
        $dia_with_hora = $fecha_explode[2];
        $dia = explode(' ', $dia_with_hora);
        //constantes que definen el rango del ciclo escolar
        $fecha_ini_escolar = $anio . '-07-19';
        $fecha_final_escolar = (intval($anio) + 1) . '-07-18';
        $pre_fecha_ini_escolar = (intval($anio) - 1) . '-07-19';
        $pre_fecha_final_escolar = $anio . '-07-18';
        //concateno la fecha actual de la inscripcion ojo, ya no tiene la hora
        $fecha_procesada = $anio . '-' . $mes . '-' . $dia[0];
        //dd($fecha_ini_escolar,$fecha_final_escolar,$fecha_procesada,$pre_fecha_ini_escolar,$pre_fecha_final_escolar);
        //primera evaluacion es para las fechas que esten dentro del rango el segundo es el que este un ciclo atras
        if ($fecha_procesada >= $fecha_ini_escolar && $fecha_procesada <= $fecha_final_escolar) {
            //ejemplo(2020-10-10) ciclo escolar 2020-2021
            $int_anio = intval($anio);
            $ciclo_escolar = $anio . "-" . ($int_anio + 1);
            return $ciclo_escolar;
            /* $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar); */
            //dd($array_ciclo_escolar);
        } elseif ($fecha_procesada >= $pre_fecha_ini_escolar && $fecha_procesada <= $pre_fecha_final_escolar) {
            //ejemplo(2020-04-10) ciclo escolar 2019-2020
            $int_anio = intval($anio);
            $ciclo_escolar = ($int_anio - 1) . "-" . $anio;
            return $ciclo_escolar;
            /* $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar); */
            //dd($array_ciclo_escolar);
        }
    }

    public function getCreatedAtConvertCicloEscolar($lista_caci)
    {
        //se agrega el ciclo escolar correspondiente a la fecha de inscripcion
        $indice_lista_caci = -1;
        $array_ciclo_escolar = [];
        $array_lista_preins_reins = [];
        $array_lista_caci = $lista_caci->toArray();
        foreach ($lista_caci as $value) {
            //obtiene la fecha de inscripcion y se descompone por mes y anio
            $fecha = $value->created_at;
            $fecha_explode = explode('-', $fecha);
            $anio = $fecha_explode[0];
            $mes = $fecha_explode[1];
            $dia_with_hora = $fecha_explode[2];
            $dia = explode(' ', $dia_with_hora);
            //constantes que definen el rango del ciclo escolar
            $fecha_ini_escolar = $anio . '-07-01';
            $fecha_final_escolar = (intval($anio) + 1) . '-06-30';
            $pre_fecha_ini_escolar = (intval($anio) - 1) . '-07-01';
            $pre_fecha_final_escolar = $anio . '-06-30';
            //concateno la fecha actual de la inscripcion ojo, ya no tiene la hora
            $fecha_procesada = $anio . '-' . $mes . '-' . $dia[0];
            //dd($fecha_ini_escolar,$fecha_final_escolar,$fecha_procesada,$pre_fecha_ini_escolar,$pre_fecha_final_escolar);
            //primera evaluacion es para las fechas que esten dentro del rango el segundo es el que este un ciclo atras
            if ($fecha_procesada >= $fecha_ini_escolar && $fecha_procesada <= $fecha_final_escolar) {
                //ejemplo(2020-10-10) ciclo escolar 2020-2021
                $int_anio = intval($anio);
                $ciclo_escolar = $anio . "-" . ($int_anio + 1);
                $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar);
                //dd($array_ciclo_escolar);
            } elseif ($fecha_procesada >= $pre_fecha_ini_escolar && $fecha_procesada <= $pre_fecha_final_escolar) {
                //ejemplo(2020-04-10) ciclo escolar 2019-2020
                $int_anio = intval($anio);
                $ciclo_escolar = ($int_anio - 1) . "-" . $anio;
                $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar);
                //dd($array_ciclo_escolar);
            }
            $indice_lista_caci = $indice_lista_caci + 1;
            //avanza al siguiente arreglo en la lista de inscripcion            
            $array_list_caci_with_cicl_escolar = array_merge($array_lista_caci[$indice_lista_caci], $array_ciclo_escolar);
            array_push($array_lista_preins_reins, $array_list_caci_with_cicl_escolar);
        }
        return $array_lista_preins_reins;
    }

    public function sendEmail($nombre_tutor, $ap_paterno, $email,$file_email)
    {
        try {
            $response = ["nombre" => $nombre_tutor . ' ' . $ap_paterno, "email" => $email];
            Mail::send($file_email, $response, function ($msj) use ($response) {
                #el objeto Asunto
                $msj->subject('Notificacion CACI');
                #El objeto a quien se lo envias
                $msj->to($response['email']);
            });
            return true;
        } catch (\Throwable $th) {
            return false;
            /* dd($th); */
        }
    }

    public function setRolCaci($id, $rolCaci,$instancia_model)
    {
        switch ($rolCaci) {
            case 'Luz Maria Gomez Pezuela':
                $caciLuz = "caciluz";
                $instancia_model->setCaci($id, $caciLuz);
                break;
            case 'Mtra Eva Moreno Sanchez':
                $caciEva = "cacieva";
                $instancia_model->setCaci($id, $caciEva);
                break;
            case 'Bertha Von Glumer Leyva':
                $caciBertha = "cacibertha";
                $instancia_model->setCaci($id, $caciBertha);
                break;
            case 'Carolina Agazzi':
                $caciCarolina = "cacicarolina";
                $instancia_model->setCaci($id, $caciCarolina);
                break;
            case 'Carmen S':
                $caciCarmen = "cacicarmen";
                $instancia_model->setCaci($id, $caciCarmen);
                break;
        }
    }

    public function getFilterAllCiclos($table)
    {
        $getAllCiclos = DB::table($table)->select('ciclo_escolar')->distinct()->orderBy('ciclo_escolar','asc')->get();
        $getAllCiclos = $getAllCiclos->toArray();
        $array_ciclo_escolar = [];
        foreach ($getAllCiclos as $value) {
            array_push($array_ciclo_escolar, $value->ciclo_escolar);
        }
        return $array_ciclo_escolar;
    }

    public function saveImagePath($nameDocumento)
    {
        $array_image_path = [];
        foreach ($nameDocumento as $value) {
            $image_path = public_path('uploads/documentos/' . $value);
            array_push($array_image_path, $image_path);            
        }
        return $array_image_path;        
    }

    public function comparaCiclosEscolares($name_table,$column_curp,$curp)
    {
        /* $fecha_de_registro = DB::table($name_table)->where('curp_num', $curp)->value('created_at')->orderBy('id','desc'); */
        $data_menor = DB::table($name_table)->where($column_curp, $curp)->orderBy('created_at','desc')->first();        
        /* dd($data_menor); */
        $inscripcion = new Funciones;
        $ciclo_escolar_inscripcion = $data_menor->ciclo_escolar;
        $ciclo_escolar_now = $inscripcion->getCicloEscolar(date("Y-m-d H:i:s"));
        if ($ciclo_escolar_inscripcion === $ciclo_escolar_now) {
            /* dd("Esta dentro del mismo ciclo, no inscribir"); */
            $isMenorIntoCicloEscolar = true;
        } else {
            /* dd("diferentes ciclos, si se puede inscribir"); */
            $isMenorIntoCicloEscolar = false;
        }
        return $isMenorIntoCicloEscolar;
    }
}
