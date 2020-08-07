<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    //protected $redirectTo = '/admin/lista_inscripcion';
    //protected $redirectTo = '/users';
    protected $redirectTo = '/lista_inscripcion';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }
    public function username()
    {
        return 'name';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }

    protected function authenticated(Request $request, $user)
    {
        //solo deja entrar a los usuarios con rol admin
        /* $resultados = $user->get()->where('usuario',$user->usuario);
        foreach ($resultados as $resultado) {
            $admin_rol = $resultado->rol_id;
        } */
        $admin_rol = 1;
        //dd($admin_rol);
        //dd($user->get()->where('usuario',$user->usuario));
        if ($admin_rol === 1) {
            //como parametro en setSession puedo mandar todos los datos del menor
            $user->setSession($admin_rol);
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error' => 'Este usuario no es un Admin']);
        }
    }
}
