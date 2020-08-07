<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ListaCaci;
use App\Model\Reinscripcion;

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
        if (auth()->user()->name === 'supercaci') {
            $lista_caci = ListaCaci::orderBy('id')->get();
        } else {
            $lista_caci = ListaCaci::where('rol_caci', auth()->user()->name)->get();
        }
        return view('admin.lista_inscripcion', compact('lista_caci'));
    }
    public function showListReinscri()
    {
        if (auth()->user()->name === 'supercaci') {
            $lista_reinscripciones = Reinscripcion::orderBy('id')->get();
        } else {
            $lista_reinscripciones = Reinscripcion::where('rol_caci', auth()->user()->name)->get();
        }
        return view('admin.lista_reinscripcion', compact('lista_reinscripciones'));
    }
}
