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
        return view('secciones_menu.login');
    }
    public function username()
    {
        return 'name';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/login');

        /* $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login'); */
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user) {
            //como parametro en setSession puedo mandar todos los datos del menor
            $user->setSession();
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error' => 'Error en Inicio de Sesión']);
        }
    }
}
