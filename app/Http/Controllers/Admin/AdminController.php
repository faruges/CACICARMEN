<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Inscripcion;
use App\Model\ListaCaci;
use App\Model\Reinscripcion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lista_caci');
    }

    public function showListInscri()
    {
        //dd(Session::get('email'));
        //instancia el objeto para poder llamar las funciones dentro de la clase
        $adminController = new AdminController;
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_caci = ListaCaci::orderBy('id')->get();
        } else {
            $lista_caci = ListaCaci::where('rol_caci', Session::get('rolName'))->get();
        }
        $array_lista_preins_reins = $adminController->showCicloEscolar($lista_caci);
        return view('admin.lista_inscripcion', compact('array_lista_preins_reins'));
    }
    public function showListReinscri()
    {
        //instancia el objeto para poder llamar las funciones dentro de la clase
        $adminController = new AdminController;
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_reinscripciones = Reinscripcion::orderBy('id')->get();
        } else {
            $lista_reinscripciones = Reinscripcion::where('rol_caci', Session::get('rolName'))->get();
        }
        $array_lista_preins_reins = $adminController->showCicloEscolar($lista_reinscripciones);
        return view('admin.lista_reinscripcion', compact('array_lista_preins_reins'));
    }

    public function showCicloEscolar($lista_caci){
        //se agrega el ciclo escolar correspondiente a la fecha de inscripcion
        $indice_lista_caci = -1;
        $array_ciclo_escolar = [];
        $array_lista_preins_reins = [];
        $array_lista_caci = $lista_caci->toArray();
        foreach ($lista_caci as $value) {
            //obtiene la fecha de inscripcion y se descompone por mes y anio
            $fecha = $value['created_at'];
            $fecha_explode = explode('-',$fecha);
            $anio = $fecha_explode[0];
            $mes = $fecha_explode[1];
            $dia_with_hora = $fecha_explode[2];
            $dia = explode(' ',$dia_with_hora);
            //constantes que definen el rango del ciclo escolar
            $fecha_ini_escolar = $anio.'-07-01';
            $fecha_final_escolar = (intval($anio)+1).'-06-30';
            $pre_fecha_ini_escolar = (intval($anio)-1).'-07-01';
            $pre_fecha_final_escolar = $anio.'-06-30';
            //concateno la fecha actual de la inscripcion ojo, ya no tiene la hora
            $fecha_procesada = $anio.'-'.$mes.'-'.$dia[0];
            //dd($fecha_ini_escolar,$fecha_final_escolar,$fecha_procesada,$pre_fecha_ini_escolar,$pre_fecha_final_escolar);
            //primera evaluacion es para las fechas que esten dentro del rango el segundo es el que este un ciclo atras
            if($fecha_procesada >= $fecha_ini_escolar && $fecha_procesada <= $fecha_final_escolar){
                //ejemplo(2020-10-10) ciclo escolar 2020-2021
                $int_anio = intval($anio);
                $ciclo_escolar = $anio. "-" .($int_anio + 1);
                $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar);
                //dd($array_ciclo_escolar);
            }elseif ($fecha_procesada >= $pre_fecha_ini_escolar && $fecha_procesada <= $pre_fecha_final_escolar) {
                //ejemplo(2020-04-10) ciclo escolar 2019-2020
                $int_anio = intval($anio);
                $ciclo_escolar = ($int_anio - 1). "-" .$anio;
                $array_ciclo_escolar = array('ciclo_escolar' => $ciclo_escolar);
                //dd($array_ciclo_escolar);
            }
            $indice_lista_caci = $indice_lista_caci + 1;
            //avanza al siguiente arreglo en la lista de inscripcion
            $array_list_caci_with_cicl_escolar = array_merge($array_lista_caci[$indice_lista_caci],$array_ciclo_escolar);
            array_push($array_lista_preins_reins, $array_list_caci_with_cicl_escolar);
        }
        return $array_lista_preins_reins;
    }

    public function actualizarCaci(Request $request)
    {
        try {
            //dd($request->all());
            $adminController = new AdminController;
            if ($request->tramite === 'inscripcion') {
                DB::table('inscripcion_menor')
                    ->where('id', $request->id)
                    ->update(['caci' => $request->caci_nombre]);
                $adminController->setRolCaci($request->id, $request->caci_nombre, $request->tramite);
                return response()->json(['ok' => true, 'result' => 'Caci se actualizo correctamente', 'caci' => 'inscripcion']);
            } elseif ($request->tramite === 'reinscripcion') {
                DB::table('reinscripcion_menor')
                    ->where('id', $request->id)
                    ->update(['caci' => $request->caci_nombre]);
                $adminController->setRolCaci($request->id, $request->caci_nombre, $request->tramite);
                return response()->json(['ok' => true, 'result' => 'Caci se actualizo correctamente', 'caci' => 'reinscripcion']);
            }
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Caci']);
        }
    }

    private function setRolCaci($id, $rolCaci, $tramite)
    {
        switch ($rolCaci) {
            case 'Luz Maria Gomez Pezuela':
                $caciLuz = "caciluz";
                if ($tramite === 'inscripcion') {
                    Inscripcion::setCaci($id, $caciLuz);
                } elseif ($tramite === 'reinscripcion') {
                    Reinscripcion::setCaci($id, $caciLuz);
                }
                break;
            case 'Mtra Eva Moreno Sanchez':
                $caciEva = "cacieva";
                if ($tramite === 'inscripcion') {
                    Inscripcion::setCaci($id, $caciEva);
                } elseif ($tramite === 'reinscripcion') {
                    Reinscripcion::setCaci($id, $caciEva);
                }
                break;
            case 'Bertha Von Glumer Leyva':
                $caciBertha = "cacibertha";
                if ($tramite === 'inscripcion') {
                    Inscripcion::setCaci($id, $caciBertha);
                } elseif ($tramite === 'reinscripcion') {
                    Reinscripcion::setCaci($id, $caciBertha);
                }
                break;
            case 'Carolina Agazzi':
                $caciCarolina = "cacicarolina";
                if ($tramite === 'inscripcion') {
                    Inscripcion::setCaci($id, $caciCarolina);
                } elseif ($tramite === 'reinscripcion') {
                    Reinscripcion::setCaci($id, $caciCarolina);
                }
                break;
            case 'Carmen S':
                $caciCarmen = "cacicarmen";
                if ($tramite === 'inscripcion') {
                    Inscripcion::setCaci($id, $caciCarmen);
                } elseif ($tramite === 'reinscripcion') {
                    Reinscripcion::setCaci($id, $caciCarmen);
                }
                break;
        }
    }
}
