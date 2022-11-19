<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Http\Requests\StoreVentaPost;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas=Venta::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Ventas.index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=Cliente::all();
        $sucursals=Sucursal::all();
        $departamentos=Departamento::all();
        echo view ('dashboard.Ventas.create', compact('clientes', 'sucursals', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaPost $request)
    {
        Venta::create([
            'Fecha' => $request->Fecha,
            'Total' => $request->Total,
            'Envio' => $request->Envio,
            'Estado' => $request->Estado,
            'Direccion' => $request->Direccion,
            'IDCliente' => $request->IDCliente,
            'IDSucursal' => $request->IDSucursal,
            'IDDepartamento' => $request->IDDepartamento,
        ]); 

        return redirect('ventas/create')->with('status', 'La venta ha sido creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        echo view('dashboard.Ventas.show', ["venta"=>$venta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        $clientes=Cliente::all();
        $sucursals=Sucursal::all();
        $departamentos=Departamento::all();
        echo view ('dashboard.Ventas.edit', compact('venta', 'clientes', 'sucursals', 'departamentos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVentaPost $request, Venta $venta)
    {
        $venta->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
        return back()->with('status','borrado exitosamente');
    }
}
