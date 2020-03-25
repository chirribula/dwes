@extends('layouts.master')

@section('titulo','Página principal')

@section('content')
<div class="container">

    @if (session('status'))
    <p style="color:blue; font-size:30px;">{{session('status')}}</p>  <!-- si existe el estado muestra el mensaje -->
    @endif

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-xs-6 col-sm-4 col-md-3 mt-3 text-center" >
                <a href="{{ action('CatalogoController@getShow', ['id' => $movie->id]) }}" style="text-decoration: none; color:black;">  <!--si pongo el enlace aquí pulsando en la imagen redirige-->
                    <div class="card" >
                        @if($movie->rented ==0)
                        <img class="card-img-top" src="{{$movie->poster}}" alt="poster de la pelicula" width="100%" height="350px;"  style="opacity:1;"  >
                    @else
                        <img class="card-img-top" src="{{$movie->poster}}" alt="poster de la pelicula" width="100%" height="350px;"  style="opacity:0.3;"  >
                    @endif
                        <div class="card-body">
                        <h5 class="card-title ">{{$movie->title}}</h5>
                        <a href="{{ action('CatalogoController@getShow', ['id' => $movie->id]) }}" class="btn btn-primary">Ver película</a>
                        </div>
                    </div>
                </a>
            </div>
         @endforeach
    </div>
</div>
@stop
