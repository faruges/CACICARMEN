<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Funciones;
use App\Model\Inscripcion;
use App\Model\ListaCaci;
use App\Model\Reinscripcion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
        return view('admin.lista_caci');
    }
    public function showListInscri()
    {
        //instancia el objeto para poder llamar las funciones dentro de la clase
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('inscripcion_menor');
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_caci = ListaCaci::orderBy('id', 'desc')->get();
        } else {
            $lista_caci = ListaCaci::where('rol_caci', Session::get('rolName'))->where('status', '1')->orderBy('id', 'desc')->get();
        }
        /* $array_lista_preins_reins = $adminController->showCicloEscolar($lista_caci); */
        $array_lista_preins_reins = $lista_caci;        
        return view('admin.lista_inscripcion', compact('array_lista_preins_reins', 'ciclos_escolares_filter'));
    }
    public function showListReinscri()
    {
        //instancia el objeto para poder llamar las funciones dentro de la clase
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('reinscripcion_menor');
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_reinscripciones = Reinscripcion::orderBy('id', 'desc')->get();
        } else {
            $lista_reinscripciones = Reinscripcion::where('rol_caci', Session::get('rolName'))->where('status', '1')->orderBy('id', 'desc')->get();
        }
        /* $array_lista_preins_reins = $adminController->showCicloEscolar($lista_reinscripciones); */
        $array_lista_preins_reins = $lista_reinscripciones;
        return view('admin.lista_reinscripcion', compact('array_lista_preins_reins', 'ciclos_escolares_filter'));
    }

    public function getListByCicloEscolar(Request $request)
    {
        /* dd($request->all()); */
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('inscripcion_menor');
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_caci = ListaCaci::where('ciclo_escolar', $request->ciclo_escolar)->orderBy('id', 'desc')->get();
        } else {
            $lista_caci = ListaCaci::where('rol_caci', Session::get('rolName'))->where('ciclo_escolar', $request->ciclo_escolar)->where('status', '1')->orderBy('id', 'desc')->get();
        }
        $array_lista_preins_reins = $lista_caci;
        return view('admin.lista_inscripcion', compact('array_lista_preins_reins', 'ciclos_escolares_filter'));
        /* return response()->json(['success'=>true,'url'=> route('lista_inscripcion', ['ciclo_escolar'=>'2021-2022'])]); */
    }
    public function getListByCicloEscolarReins(Request $request)
    {
        $ciclos_escolares_filter = $this->funciones->getFilterAllCiclos('reinscripcion_menor');
        if (Session::get('rolName') === 'super_caci' || Session::get('rolName') === 'super_admin') {
            $lista_reinscripciones = Reinscripcion::where('ciclo_escolar', $request->ciclo_escolar)->orderBy('id', 'desc')->get();
        } else {
            $lista_reinscripciones = Reinscripcion::where('rol_caci', Session::get('rolName'))->where('ciclo_escolar', $request->ciclo_escolar)->where('status', '1')->orderBy('id', 'desc')->get();
        }
        $array_lista_preins_reins = $lista_reinscripciones;
        return view('admin.lista_reinscripcion', compact('array_lista_preins_reins', 'ciclos_escolares_filter'));
    }

    public function actualizarCaci(Request $request)
    {
        try {
            /* $adminController = new AdminController; */
            DB::table('inscripcion_menor')
                ->where('id', $request->id)
                ->update(['caci' => $request->caci_nombre]);
            $inscripcion = new Inscripcion;
            $this->funciones->setRolCaci($request->id, $request->caci_nombre, $inscripcion);
            return response()->json(['ok' => true, 'result' => 'Caci se actualizo correctamente', 'caci' => 'inscripcion']);
            if ($request->tramite === 'inscripcion') {
            } elseif ($request->tramite === 'reinscripcion') {
                DB::table('reinscripcion_menor')
                    ->where('id', $request->id)
                    ->update(['caci' => $request->caci_nombre]);
                $reinscripcion = new Reinscripcion;
                $this->funciones->setRolCaci($request->id, $request->caci_nombre, $reinscripcion);
                return response()->json(['ok' => true, 'result' => 'Caci se actualizo correctamente', 'caci' => 'reinscripcion']);
            }
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Caci']);
        }
    }
}
