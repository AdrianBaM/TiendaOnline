<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoPost;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Productos.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas=Marca::all();
        $sucursals=Sucursal::all();
        echo view ('dashboard.Productos.create', compact('marcas', 'sucursals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoPost $request)
    {
        $requestData=$request->all();
        $fileName=time().$request->file('image_path')->getClientOriginalName();
        $path=$request->file('image_path')->storeAs('imagenes',$fileName,'public');
        $requestData['image_path']='/storage/'.$path;
        Producto::create($requestData);

        return redirect('productos/create')->with('status', 'El producto ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo view('dashboard.Productos.show', ["producto"=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $marcas=Marca::all();
        $sucursals=Sucursal::all();
        echo view ('dashboard.Productos.edit', compact('producto', 'marcas', 'sucursals')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoPost $request, Producto $producto)
    {

        $producto->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return back()->with('status','borrado exitosamente');
    }
}
