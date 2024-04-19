<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AccesoController extends Controller
{
    public function acceder()
    {
        if (Auth::check()){
            return redirect()->route('index_intranet');
        } 
        return view ('acceso.accesoprincipal');
    }

    public function iniciar_sesion(LoginRequest $request)
    {
        $archivo=fopen("loginacceso.txt","w+");
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)){
            return redirect()->to (route('acceso_aplicativo'))->withErrors ('auth.failed');
        }
        $user= Auth::getProvider()->retrieveByCredentials($credentials);
        auth::login($user);
        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request, $user){
        return redirect(route('index_intranet'));
    }

    public function cerrar_sesion(){
        Session::flush();
        Auth::logout();
        return redirect(route('acceso_aplicativo'));
    }

}
