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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'engatusados' ,'middleware'=>'auth'], function(){

    Route::get('','GatoController@getIndex');

    Route::get('show/{id}','GatoController@getShow')->where('id','[0-9]+');

    Route::get('create','GatoController@create');

    Route::put('create/submit','GatoController@save');

    Route::get('edit/{id}','GatoController@edit')->where('id','[0-9]+');

    Route::put('edit/submit/{id}','GatoController@update')->where('id','[0-9]+');



});
