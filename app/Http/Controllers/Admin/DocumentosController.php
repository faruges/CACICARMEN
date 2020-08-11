<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Documentos;
use App\Model\Inscripcion;
use App\Model\Reinscripcion;
use Illuminate\Support\Facades\Session;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emailCaci = Session::get('email');
        $data=Documentos::where('reinscripcion_menor_id',$id)->get();
        $lista_reinscripcion=Reinscripcion::where('id',$id)->get();
        return view('admin.lista_documentos',compact('data','id','lista_reinscripcion','emailCaci'));

    }

    public function show_inscr($id)
    {
        //dd(Session::get('email'));
        $emailCaci = Session::get('email');
        $data=Documentos::where('inscripcion_menor_id',$id)->get();
        $lista_inscripcion=Inscripcion::where('id',$id)->get();
        return view('admin.lista_documentos_insc',compact('data','id','lista_inscripcion','emailCaci'));
    }

    public function details($id)
    {
        $data=Documentos::find($id);
        return view('admin.detalles_documento',compact('data'));
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
