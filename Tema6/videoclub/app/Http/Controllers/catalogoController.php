<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogoController extends Controller
{

    public function getIndex(){
        $movies=Movie::all();
        return view('Catalogo.index',['movies'=>$movies]);
    }

    public function getShow($id){
        $movie=Movie::findOrFail($id);
        return view('Catalogo.show',['movie'=>$movie]);
    }


    public function create(){
        return view('Catalogo.create');
    }

    public function save(Request $request){
        $movie = new Movie();
        $movie->title = $request->input('titulo');
        $movie->year = $request->input('anyo');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('imagen');
        $movie->synopsis = $request->input('sinopsis');
        $movie->save();
        return redirect()->action("CatalogoController@getIndex")->with('status', $movie->title.' insertada correctamente');
    }



    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('Catalogo.edit',["movie"=>$movie]);
    }

    public function update(Request $request,$id){
        $movie = Movie::find($id);
        $movie->title = $request->input('titulo');
        $movie->year = $request->input('anyo');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('imagen');
        $movie->synopsis = $request->input('sinopsis');
        $movie->save();
        return redirect()->action("CatalogoController@getIndex")->with('status', $movie->title. ' actualizada correctamente');
    }

    public function devolver($id){
        $movie=Movie::findOrFail($id);
        $movie->rented = 0;
        $movie->save();
        return view('Catalogo.show',['movie'=>$movie]);
    }

    public function alquilar($id){
        $movie=Movie::findOrFail($id);
        $movie->rented = 1;
        $movie->save();
        return view('Catalogo.show',['movie'=>$movie])->with('status', $movie->title. ' alquilada');
    }



}
