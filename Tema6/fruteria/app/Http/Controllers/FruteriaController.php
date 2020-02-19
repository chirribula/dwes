<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FruteriaController extends Controller
{

    public function index(){
        return view('index');
    }

    public function listar(){
        $frutas=DB::table('frutas')
            ->orderBy('id','asc')
            ->get();

            return view('fruta.listar',[
                'frutas' => $frutas
            ]);
    }


    public function detalle($id){
        $fruta = DB::table('frutas')
        ->where('id',$id)->first();

        return view('fruta.detalle' , ['fruta'=>$fruta]);
    }



    public function borrar($id){
        $fruta = DB::table('frutas')
        ->where('id',$id)->delete();

        return redirect()->action('FruteriaController@listar')->with('status' , 'Fruta '.$id.' borrada correctamente');
    }



    public function editar($id){
        $fruta = DB::table('frutas')
        ->where('id',$id)->first();

        return view('fruta.editar' , ['fruta'=>$fruta]);
    }

    public function update(Request $request, $id){
        $fruta = DB::table('frutas')
        ->where('id',$id)
        ->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d'),
            ]);
            return redirect()->action('FruteriaController@listar')->with('status' , 'Fruta '.$id.' actualizada correctamente');
    }


    public function insertar(){
        return view('fruta.insertar');
    }

    public function save(Request $request){
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d'),
        ));
        return redirect()->action('FruteriaController@listar')->with('status' , 'Fruta  insertada correctamente');
    }

}
