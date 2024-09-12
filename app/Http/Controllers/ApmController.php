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

class ApmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('apm.index');
    }

    public function autenticar()
    {
        return view ('apm.autenticacionapm');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /*public function acceder()
    {
        if (Auth::check()){
            return redirect()->route('index_apm');
        } 
        return view ('apm.apm2');
    }*/

    public function registrar( UserRequest $request):RedirectResponse
    {
        $archivo=fopen("registrar.txt","w+");
        fwrite($archivo,"hola");
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //Auth::login ($user);
        return redirect()->route('index_apm')->with('success','Nuevo usuario añadido');

      
       
        //return redirect()->route('index_apm');
    }

    public function loguear( UserRequest $request)
    {
        /*validacion de datos  */


        $archivo=fopen("login.txt","w+");
        fwrite($archivo,$request->email);
        fwrite($archivo,$request->password);
        $credentials = [
            'email'=> $request->email,
            'password'=>$request->password,
        ];

        
        fwrite($archivo,print_r($credentials,true));

        /*mantener iniciada la sesion  */
        //$remember = ($request->has('remember') ?true:false);
        if(Auth::attempt($credentials)){
            //fwrite($archivo, "logado correctamente");
            $request ->session()->regenerate();
            return redirect()->intended(route('indice_apm'));
        }else{
            return redirect()->route('acceso_apm')->with('success','error en las credenciales');
        }
    }

    public function login2(LoginRequest $request)
    {
        $archivo=fopen("login2.txt","w+");
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)){
            return redirect()->to (route('acceso_apm'))->withErrors ('auth.failed');
        }
        $user= Auth::getProvider()->retrieveByCredentials($credentials);
        auth::login($user);
        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request, $user){
        return redirect(route('index_apm'));
    }

    /*public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('acceso_apm');
 
    }*/
    public function logout2(){
        Session::flush();
        Auth::logout();
        return redirect(route('acceso_apm'));
    }
}
