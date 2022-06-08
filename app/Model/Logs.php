<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Logs extends Model
{

    protected $table = 'logs';

    protected $fillable = [
        'proceso',
        'nameUser',
        'inscripcion_menor_id',
        'reinscripcion_menor_id',
        'created_at',
        'updated_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

}
