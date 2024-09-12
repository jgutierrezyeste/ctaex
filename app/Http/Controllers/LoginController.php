<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function register (Request $request)
    {
        //validar los datos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        /*pasamos a <autenticarlo></autenticarlo>*/
        Auth::login ($user);
        return redirect(route('index_apm'));

    }

    public function login(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }
}
