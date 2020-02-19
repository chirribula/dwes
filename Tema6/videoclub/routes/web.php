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


Route::get('/', 'CatalogoController@index');




Route::group(['prefix'=>'catalogo'], function(){

    Route::get('','CatalogoController@index');

    Route::get('show/{id}','CatalogoController@show');

    Route::get('create','CatalogoController@create');

    Route::get('edit/{id}','CatalogoController@edit');

});
