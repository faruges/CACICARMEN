<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $remember_token = false;
    protected $table = 'users'; 
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $guarded = ['id'];

    public function setSession($supercaci_rol)
    {
        //aqui se pone el nombre de usuario el rol etc
        if ($supercaci_rol !== 0) {
            //$rol = Rol::where('id', $supercaci_rol)->get();
            //dd($this->nombre,$this->id);
            Session::put([
                /* 'rol_id' => $rol[0]['id'],
                'rol_nombre' => $rol[0]['nombre'], */
                'name' => $this->name,
                'email' => $this->email               
            ]); 
        }
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:5',
    ];
    public static $updateRules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

}
