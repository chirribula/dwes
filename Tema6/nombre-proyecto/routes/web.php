<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Hola mundo";
});

Route::get('usuario/{nombre?}', function($nombre="Admin"){
    return "Usuario: " .$nombre;
});

Route::get('usuario2/{edad}', function($edad){
    return "Usuario edad: " .$edad;
})->where('edad','[0-9]+');

Route::get('prueba/','PruebaController@index');


/*

Route::get('usuario3/{nombre}/{edad}', function($nombre, $edad){
    return view('miVista',['nombre'=>$nombre,'edad'=>$edad]);
})->where(array('nombre'=>'[A-Za-z]+','edad'=>'[0-9]+'));
/*
Route::get('usuario2/{edad?}', function ($edad=0) {
    return 'Usuario: '.$edad;})
    ->where('edad','[0-9]+');

Route::get('usuario3/{nombre}/{edad}', function ($nombre, $edad) {
    return view('prueba.vista',['nombre'=>$nombre , 'edad'=>$edad]);
})->where(array('nombre'=> '[A-Za-z]+', 'edad' => '[0-9]'));*/



?>