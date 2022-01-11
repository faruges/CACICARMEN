<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Funciones;
use App\Model\Documentos;
use App\Model\Inscripcion;
use App\Model\Logs;
use App\Model\Reinscripcion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->funciones = new Funciones;
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
        $nameUser = Session::get('name');
        $data = Documentos::where('reinscripcion_menor_id', $id)->get();
        $lista_reinscripcion = Reinscripcion::where('id', $id)->get();
        return view('admin.lista_documentos', compact('data', 'id', 'lista_reinscripcion', 'emailCaci', 'nameUser'));
    }

    public function show_inscr($id)
    {
        //dd(Session::get('email'));
        $emailCaci = Session::get('email');
        $nameUser = Session::get('name');
        $data = Documentos::where('inscripcion_menor_id', $id)->get();
        $lista_inscripcion = Inscripcion::where('id', $id)->get();
        /* dd($lista_inscripcion); */
        return view('admin.lista_documentos_insc', compact('data', 'id', 'lista_inscripcion', 'emailCaci', 'nameUser'));
    }

    public function details($id)
    {
        $data = Documentos::find($id);
        return view('admin.detalles_documento', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDataLogById(Request $request)
    {
        /* dd($request->nameUser); */
        if ($request->id) {
            $dataLogs = Logs::where($request->id_proceso, $request->id)->get();
            /* $dataLogs=json_encode($dataLogs[0]); */
            return response()->json(['ok' => true, 'result' => $dataLogs[0]]);
        } else {
            return response()->json(['ok' => false]);
        }
    }

    public function compruebaSiExisteDocs($request)
    {

        $nameDocumento = DB::table('documentos')
            ->where($request->id_proceso, $request->id)->get()->pluck('nombre');
        $array_image = $this->funciones->saveImagePath($nameDocumento);
        for ($index = 0; $index < count($array_image); $index++) {
            if (!File::exists($array_image[$index])) {
                return false;
            }
        }
        return $array_image;
    }

    public function destroy(Request $request)
    {
        /* dd($request->lista); */
        if ($request->id) {
            DB::table($request->tabla)
                ->where('id', $request->id)
                ->update(['status' => '-1']);
            DB::table('logs')->insert([
                [$request->id_proceso => $request->id, 'nameUser' => $request->nameUser, 'proceso' => $request->proceso]
            ]);
            $documentosController = new DocumentosController;
            $array_image = $documentosController->compruebaSiExisteDocs($request);
            if ($array_image) {
                File::delete($array_image);
                return response()->json(['ok' => true]);
            } else {
                return response()->json(['ok' => false]);
            }
        } else {
            return response()->json(['ok' => false]);
        }
    }
    public function compruebaSiExisteOneDoc($id_file)
    {
        $nameDocumento = DB::table('documentos')
            ->where('id', $id_file)->get()->pluck('nombre');
        $array_image = $this->funciones->saveImagePath($nameDocumento);
        for ($index = 0; $index < count($array_image); $index++) {
            if (!File::exists($array_image[$index])) {
                return false;
            }
        }
        return $array_image;
    }
    public function updateDocOfUser($documentosController, $id_file, $request_file_upgrade, $tramite)
    {
        //devuelve el path de la imagen es decir la direccion en donde se encuentra
        $array_path_image = $documentosController->compruebaSiExisteOneDoc($id_file);
        if ($array_path_image) {
            //elimina fisicamente el archivo dentro del sistema de archivos
            File::delete($array_path_image);
            $file_upgrade = $request_file_upgrade;
            $filename = time() . ' ' . $file_upgrade->getClientOriginalName();
            //guarda en sistema de archivos
            $file_upgrade->move('uploads/documentos', $filename);
            DB::table('documentos')
                ->where('id', $id_file)
                ->update(['nombre' => $filename]);
            return true;
        } else {
            return false;
        }
    }
    public function actualizarDoc(Request $request)
    {
        /* dd($request->all()); */
        $documentosController = new DocumentosController;
        try {
            if ($request->tramite === 'inscripcion') {
                $response = $documentosController->updateDocOfUser($documentosController, $request->id_file, $request->file('file_upgrade'), $request->tramite);
                if ($response) {
                    return response()->json(['ok' => true, 'result' => 'Documento se actualizo correctamente', 'caci' => 'inscripcion']);
                }else{
                    return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
                }
            } elseif ($request->tramite === 'reinscripcion') {
                $response = $documentosController->updateDocOfUser($documentosController, $request->id_file, $request->file('file_upgrade'), $request->tramite);
                if ($response) {
                    return response()->json(['ok' => true, 'result' => 'Documento se actualizo correctamente', 'caci' => 'reinscripcion']);
                }else{
                    return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
                }
            }
        } catch (\Throwable $th) {
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la actualizacion del Documento']);
        }
    }
}
