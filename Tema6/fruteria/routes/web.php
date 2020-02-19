<?php

Route::get('/','FruteriaController@index');


Route::group(['prefix'=>'fruta'], function(){

    Route::get('listar','FruteriaController@listar');

    Route::get('detalle/{id}','FruteriaController@detalle');                                 //detalle

    Route::get('borrar/{id}','FruteriaController@borrar')->where('id', '[0-9]+');           //borrar

    Route::get('editar/{id}' ,'FruteriaController@editar' )->where('id', '[0-9]+');        // editar1

    Route::post('editar/update/{id}','FruteriaController@update')->where('id', '[0-9]+');   // editar2

    Route::get('insertar','FruteriaController@insertar');                                   // insertar1

    Route::post('insertar/save','FruteriaController@save');                               // insertar2

});








?>
