<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $remember_token = false;
    public $timestamps = false;
    protected $fillable = [
        'usuario', 'email', 'password', 'nombre',
    ];
    protected $guarded = ['id', 'rol_id'];

    public function setSession($admin_rol)
    {
        //aqui se pone el nombre de usuario el rol etc
        if ($admin_rol !== 0) {
            $rol = Rol::where('id', $admin_rol)->get();
            //dd($this->nombre,$this->id);
            Session::put([
                'rol_id' => $rol[0]['id'],
                'rol_nombre' => $rol[0]['nombre'],
                'usuario' => $this->usuario,
                'nombre_usuario' => $this->nombre,
                'usuario_id' => $this->id,
            ]); 
        }
    }
}
