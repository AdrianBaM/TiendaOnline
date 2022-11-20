<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect)
    {
        $user = User::where('Nombre', $request->Nombre)->first();
        if($user->Password === md5($request->Password))
        {
            Auth::login($user);
            /* return redirect('post/create'); */

            if($request->Nombre === 'superadmin')
            {
                return redirect('far');
            }
            if($request->Nombre === 'Cliente'){
                return redirect('/');
            }
            if($request->Nombre === 'Admin'){
                return redirect('post');
            }
            
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
