<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view('usuario.formulario');
    }

    public function recibir(Request $request){
        $nombre = $request -> input('nombre');
        $apellidos = $request -> input('apellidos');
        $puesto = $request -> input('puesto');
        return view('usuario.mostrarUsuarios',['nombre'=>$nombre, 'apellidos'=>$apellidos, 'puesto'=>$puesto]);
    }


}
