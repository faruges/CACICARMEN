<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Documentos extends Model
{

    protected $table = 'documentos';

    protected $fillable = [
        'nombre',
        'nombre_tramite',
        'inscripcion_menor_id',
        'reinscripcion_menor_id',
        'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = false;

}
