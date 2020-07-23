<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripcion_menor';
    protected $fillable = [
        'nombre_tutor_madres', 'apellido_paterno_tutor', 'apellido_materno_tutor',
        'domicilio_delegracion', 'tipo_nomina_1', 'num_empleado_1', 'num_plaza_1', 'clave_dependencia_1', 'nivel_salarial_1', 'seccion_sindical_1', 'email_correo', 'telefono_celular', 'telefono_3',
        'nombre_menor_1', 'apellido_paterno_1', 'apellido_materno_1', 'curp_num', 'birthday', 'Edad_menor','caci'
    ];
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
        if ($uploadedFile) {
            foreach ($uploadedFile as $value) {
                $filename = time() . ' ' . $value->getClientOriginalName();
                //guarda en sistema de archivos
                $value->move('uploads/documentos', $filename);
                //inserta en la bd
                $data['nombre'] = $filename;
                $data['inscripcion_menor_id'] = $id_reins;
                $data['created_at'] = now();
                Documentos::create($data);
            }
            return true;
        }else{
            return true;
        }
    }
}
