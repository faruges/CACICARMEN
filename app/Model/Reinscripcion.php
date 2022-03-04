<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reinscripcion extends Model
{
    protected $table = 'reinscripcion_menor';

    protected $fillable = [
        'rfc', 'nombre_tutor', 'ap_paterno_t', 'ap_materno_t', 'calle', 'numero_domicilio', 'colonia', 'alcaldia', 'codigo_postal',
        'tipo_nomina', 'num_empleado', 'num_plaza', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'horario_laboral',
        'email', 'telefono_uno', 'telefono_dos', 'horario_laboral_ent',
        'horario_laboral_sal', 'nombre_menor', 'ap_paterno', 'ap_materno', 'curp', 'fecha_nacimiento', 'edad_menor_ingreso',
        'caci', 'terminos', 'correo_enviado', 'ciclo_escolar', 'status', 'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
        $reinscripcion = new Reinscripcion();
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                $siTieneRepetidos = $reinscripcion->addToArrayNameFiles($uploadedFile);
                if (!$siTieneRepetidos) {
                    foreach ($value as $valueNombreTramite) {
                        //procesa el archivo
                        if (!is_string($valueNombreTramite)) {
                            //dd($valueNombreTramite);
                            $filename = time() . ' ' . $valueNombreTramite->getClientOriginalName();
                            //guarda en sistema de archivos
                            $valueNombreTramite->move('uploads/documentos', $filename);
                            //inserta en la bd
                            $data['nombre'] = $filename;
                        } else {
                            //procesa el nombre del tramite
                            //dd($valueNombreTramite);
                            $data['nombre_tramite'] = $valueNombreTramite;
                            $data['reinscripcion_menor_id'] = $id_reins;
                            $data['created_at'] = now();
                            Documentos::create($data);
                        }
                    }
                } else {
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public function addToArrayNameFiles($uploadedFile)
    {
        $arrayDatos = [];
        $esArchivoRepetido = false;
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                foreach ($value as $valueNombreTramite) {
                    if (!is_string($valueNombreTramite)) {

                        $arrayDatos[] = $valueNombreTramite->getClientOriginalName();
                    }
                }
            }
        }

        if (count($arrayDatos) >= 1) {
            $reinscripcion = new Reinscripcion();
            $esArchivoRepetido = $reinscripcion->tieneArchivosRepetidos($arrayDatos);
            /* dd($esArchivoRepetido); */
            return $esArchivoRepetido;
        }
        return $esArchivoRepetido;
    }

    public function tieneArchivosRepetidos($arrayDatos)
    {
        for ($i = 0; $i < count($arrayDatos); $i++) {

            for ($j = 0; $j < count($arrayDatos); $j++) {
                if ($i != $j) {
                    if ($arrayDatos[$i] == $arrayDatos[$j]) {
                        /* echo "si hay elementos repetidos"; */
                        return true;
                    } else {
                        /* echo "no hay elementos repetidos"; */
                        return false;
                    }
                }
            }
        }
    }

    public static function setCicloByIdMenor($id, $ciclo_escolar)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['ciclo_escolar' => $ciclo_escolar]);
    }
    public static function insertFlagEnvioEmail($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado' => 1]);
    }
    public static function setCaci($id, $rolCaci)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['rol_caci' => $rolCaci]);
    }
}
