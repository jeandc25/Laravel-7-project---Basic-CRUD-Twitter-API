<?php

namespace App\Http\Controllers;

use App\categorias;
use Illuminate\Http\Request;

class listcatcontroller extends Controller
{
    public function show(){
        $categorias = categorias::paginate(10);
        return view('categorias.mostrar',compact('categorias'));
        
    }
}
