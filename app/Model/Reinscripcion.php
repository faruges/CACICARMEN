<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reinscripcion extends Model
{
    protected $table = 'reinscripcion_menor';

    protected $fillable = [
        'rfc', 'nombre_tutor', 'ap_paterno_t', 'ap_materno_t', 'domicilio', 'tipo_nomina', 'num_empleado', 'num_plaza', 'clave_dependencia',
        'nivel_salarial', 'seccion_sindical', 'horario_laboral', 'email', 'telefono_uno', 'telefono_dos', 'horario_laboral_ent',
        'horario_laboral_sal', 'matricula', 'nombre_menor', 'ap_paterno', 'ap_materno', 'curp', 'fecha_nacimiento', 'edad_menor_ingreso',
        'caci'
    ];
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
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
            }
            return true;
        } else {
            return false;
        }
    }
}
