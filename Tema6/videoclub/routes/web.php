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

use Illuminate\Support\Facades\Auth;

Auth::routes();                                                      /*cuando instalas artisan auth*/

Route::get('/', 'HomeController@index')->name('home');;

Route::group(['prefix'=>'catalogo' ,'middleware'=>'auth'], function(){

    Route::get('','CatalogoController@getIndex');

    Route::get('show/{id}','CatalogoController@getShow')->where('id','[0-9]+');

    Route::get('create','CatalogoController@create');

    Route::put('create/submit','CatalogoController@save');

    Route::get('edit/{id}','CatalogoController@edit')->where('id','[0-9]+');

    Route::put('edit/submit/{id}','CatalogoController@update')->where('id','[0-9]+');

    Route::get('alquilar/{id}','CatalogoController@alquilar')->where('id','[0-9]+');

    Route::get('devolver/{id}','CatalogoController@devolver')->where('id','[0-9]+');

});
