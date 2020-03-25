@extends('layouts.master')

@section('titulo','Crear película')

@section('content')
    <div class="container">
        <h2>Añadir Película</h2>
        <form action="{{action('CatalogoController@save')}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}

            <div class="form-group">
                <label>Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="form-group">
                <label>Año:</label>
                <input type="text" class="form-control" id="anyo" name="anyo">
            </div>
            <div class="form-group">
                <label>Director:</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="form-group">
                <label>Imagen:</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea class="form-control" rows="3" type="text" id="sinopsis" name="sinopsis"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Añadir Película</button>
        </form>
    </div>

@stop
