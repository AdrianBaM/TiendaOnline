<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Tipo;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpleadoPost;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleado::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Empleados.index', ['empleados' => $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals=Sucursal::all();
        echo view ('dashboard.Empleados.create', ['sucursals' => $sucursals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleadoPost $request)
    {
        Empleado::create([
            'Nombre' => $request->Nombre,
            'Telefono' => $request->Telefono,
            'Dpi' => $request->Dpi,
            'Direccion' => $request->Direccion,
            'IDSucursal' => $request->IDSucursal,
        ]); 
        return redirect('empleados/create')->with('status', 'El empleado ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        echo view('dashboard.Empleados.show', ["empleado"=>$empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $sucursals=Sucursal::all();
        echo view ('dashboard.Empleados.edit', compact('empleado', 'sucursals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmpleadoPost $request, Empleado $empleado)
    {
        $empleado->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return back()->with('status','borrado exitosamente');
    }
}
