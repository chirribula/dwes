@extends('layouts.master')

@section('titulo','Mostrar película')

@section('content')

    <div class="row">

        @if (session('status'))
            <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
        @endif

       <div class="col-sm-6 mt-4">
           @if($movie->rented ==0)
                <img src="{{$movie->poster}}" alt="poster de la pelicula" width="350px;"  style="opacity:1"  >
            @else
                <img src="{{$movie->poster}}" alt="poster de la pelicula" width="350px;" style="opacity:0.1"  >
            @endif
        </div>

        <div class="col-sm-6 p-3">
            <h1 class="pb-5"> {{$movie->title}}</h1>
            <p>{{$movie->director}}</p>
            <p>{{$movie->year}}</p>
            <p>{{$movie->synopsis}}</p>

           @if($movie->rented ==1)
                <p style="color:red;font-weight:bolder; font-size:30px;">Alquilada</p>
                <a href="{{ action('CatalogoController@devolver', ['id' => $movie->id] ) }}" class="btn btn-success">Devolver película</a>
           @else
                <p style="color:green; font-weight:bolder; font-size:30px;">Disponible</p>
                <a href="{{ action('CatalogoController@alquilar', ['id' => $movie->id] ) }}" class="btn btn-primary">Alquilar película</a>
           @endif
                <a href="{{ action('CatalogoController@edit', ['id' => $movie->id] ) }}" class="btn btn-warning">Editar Película</a>
                <a href="{{ action('CatalogoController@getIndex')}}" class="btn btn-secondary">Volver al listado</a>
        </div>

    </div>

@stop
