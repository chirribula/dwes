<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulario - Usuario</title>
    </head>
    <body>
        <form name="formulario" method="POST" action="{{action('UsuarioController@recibir')}}">
            {{ csrf_field() }}
            <fieldset>
                <legend>Nuevo Usuario</legend>
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" size="50"/>
                </div>
                <br>
                <div>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" size="50"/>
                </div>
                <br>
                <div>
                    <label for="puesto">Puesto</label>
                    <input type="text" name="puesto" size="50"/>
                </div>
                <br>
                <div>
                    <input type="submit" value="Agregar"/>
                </div>
            </fieldset>
        </form>
    </body>
</html>
