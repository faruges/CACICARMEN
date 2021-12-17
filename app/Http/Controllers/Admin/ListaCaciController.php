<?php

namespace App\Http\Controllers;

use App\Model\ListaCaci;
use Illuminate\Http\Request;

class ListaCaciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_caci = ListaCaci::orderBy('id')->get();
        return view('lista_caci', compact('lista_caci'));
    }
}
