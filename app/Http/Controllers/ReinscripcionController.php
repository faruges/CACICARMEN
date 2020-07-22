<?php

namespace App\Http\Controllers;

use App\Model\Documentos;
use App\Model\Reinscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReinscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $file=Documentos::all();
        return view() */
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
    public function guardar(Request $request)
    {
        /* dd($request)->all(); */
        Reinscripcion::create($request->all());
        //obtiene id de reinscripcion
        $id_reins = Reinscripcion::select('id')->orderByDesc('id')->get()->first();
        $id=$id_reins->id;
        $filename_act = $request->file('filename_act');
        $filename_sol = $request->file('filename_sol');
        $filename_vacu = $request->file('filename_vacu');
        $filename_nac = $request->file('filename_nac');
        $filename_vacu_2 = $request->file('filename_vacu_2');
        $filename_cert = $request->file('filename_cert');
        $filename_rec = $request->file('filename_rec');
        $filename_disc = $request->file('filename_disc');
        $filename_trab = $request->file('filename_trab');
        $filename_com = $request->file('filename_com');
        $filename_recp = $request->file('filename_recp');
        
        $arrayFiles = array(
        $filename_act
        ,$filename_sol
        ,$filename_vacu
        ,$filename_nac
        ,$filename_vacu_2
        ,$filename_cert
        ,$filename_rec
        ,$filename_disc
        ,$filename_trab
        ,$filename_com
        ,$filename_recp);
        if (Reinscripcion::setDoc($arrayFiles, $id)) {
            return redirect('reinscripcion')->with('mensaje', "Menú creado con exito");
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
