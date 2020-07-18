<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripcion_menor';
    protected $fillable = [
        'nombre_menor', 'ap_paterno', 'ap_materno', 'curp', 'fecha_nacimiento', 'edad_menor_ingreso', 'nombre_tutor', 'ap_paterno_t', 'ap_materno_t',
        'domicilio', 'tipo_nomina', 'num_empleado', 'num_plaza', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'horario_laboral', 'email', 'telefono_uno', 'telefono_dos'
    ];
    protected $guarded = ['id'];
    public $timestamps = false;
}
