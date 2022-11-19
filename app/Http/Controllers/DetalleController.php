<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDetallePost;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles=Detalle::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Detalles.index', ['detalles' => $detalles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas=Venta::all();
        echo view ('dashboard.Detalles.create', compact('ventas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetallePost $request)
    {
        Detalle::create([
            'Subtotal' => $request->Subtotal,
            'Cantidad' => $request->Cantidad,
            'IDVenta' => $request->IDVenta,
        ]); 

        return redirect('detalles/create')->with('status', 'El detalle ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show(Detalle $detalle)
    {
        echo view('dashboard.Detalles.show', ["detalle"=>$detalle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle $detalle)
    {
        $ventas=Venta::all();
        echo view ('dashboard.Detalles.edit', compact('detalle', 'ventas')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDetallePost $request, Detalle $detalle)
    {
        $detalle->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalle $detalle)
    {
        $detalle->delete();
        return back()->with('status','borrado exitosamente');
    }
}
