<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Fruteria</title>
</head>
<body>
    @include('includes.header')
    <div class="container-fluid" style="height: 700px;" >


        <h1 class="text-center m-4">DETALLE DE LA FRUTA</h1>

        <table class="table table-dark table-striped text-center">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$fruta->id}}</td>
                <td>{{$fruta->nombre}}</td>
                <td>{{$fruta->descripcion}}</td>
                <td>{{$fruta->precio}}</td>
                <td>{{$fruta->fecha}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ action('FruteriaController@editar', ['id' => $fruta->id]) }}">  <button type="button" class="btn btn-success">Editar</button></a>
                        <a href="{{ action('FruteriaController@borrar', ['id' => $fruta->id]) }}"> <button type="button" class="btn btn-danger">Eliminar</button> </a>
                    </div>
                </td>

            </tr>

        </tbody>
        </table>

        </div>
    @include('includes.footer')
</body>
</html>
