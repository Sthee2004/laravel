<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Registro extends Controller
{
    function registro(){
        return view('registro');
   }
    
   function criarConta(Request $request) {
        // dd($request->all());

        $usuario = new Usuario();
        $usuario->create($request->all());
   }
}
