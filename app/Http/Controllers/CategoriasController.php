<?php

namespace App\Http\Controllers;

use App\categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __construct(){// para que solo puedan ingresar los que han iniciado sesion
        $this->middleware('auth');
        
    }
    public function create()
    {
        return view('categorias.crear');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required|min:1|max:11|unique:categorias',
            'nombre' => 'required|min:4|max:50',
            'icono' => 'required|min:4|max:25',
            'detalle' => 'required|min:10|max:3000'
        ]);

        //creando una nueva entrada
        $cat =new categorias();
        $cat->id =$validateData['id'];
        $cat->nombre =$validateData['nombre'];
        $cat->icono =$validateData['icono'];
        $cat->detalle =$validateData['detalle'];
        $cat->save();//insert
        
        $status ='tu entrada ha sido publicada exitosamente';
        return back()->with(compact('status'));
    }
}
