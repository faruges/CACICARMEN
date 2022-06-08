<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class caci extends Model
{
    protected $table = 'caci';
    protected $fillable = ['caci', 'curp_caci'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
