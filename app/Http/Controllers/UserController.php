<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserPost;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request, Redirector $redirect)
    {
        $user = User::where('Usuario', $request->Usuario)->first();
        if($user->Pass === md5($request->Pass))
        {
            Auth::login($user);
            if($user->IDTipo === 1)
            {
                return redirect('/productos');
            }
            if($user->IDTipo === 2)
            {
                return redirect('/user');
            }
            if($user->IDTipo === 3)
            {
                return redirect('/shop');
            }
            
        }
        return redirect('login');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Users.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos=Tipo::all();
        echo view ('dashboard.Users.create', ['tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        User::create([
            'Usuario' => $request->Usuario,
            'Pass' => md5($request->Pass),
            'IDTipo' => $request->IDTipo,
        ]); 
        return back()->with('status', 'El usuario ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        echo view('dashboard.Users.show', ["usuario"=>$usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete(); // Easy right?
 
        return redirect('/user')->with('success', 'Eliminado correctamente'); 
    }
}
