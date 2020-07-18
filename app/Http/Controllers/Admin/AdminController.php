<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ListaCaci;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_caci = ListaCaci::orderBy('id')->get();
        return view('admin.lista_caci', compact('lista_caci'));
    }
    
}
