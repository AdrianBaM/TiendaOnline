<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class CatmaController extends Controller
{
    public function index()
    {
        $marcas=Marca::orderBy('created_at','asc')->cursorpaginate(5);
        echo view ('dashboard.Catmas.index', compact('marcas'));
    }

    public function create()
    {
        $marcas=Marca::all();
        $categorias=Categoria::all();
        echo view ('dashboard.Catmas.create', compact('marcas', 'categorias'));
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {
        echo ('hola');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
