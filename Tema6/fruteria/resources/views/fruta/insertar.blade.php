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


        <h3 class="text-center m-4">INSERTAR UNA FRUTA</h3>

    <form action="{{ action('FruteriaController@save')}}" name="form2" method="post"  class="was-validated">

    {{ csrf_field() }}

        <fieldset>
            <legend>Formulario de creación</legend>
        </fieldset>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Escribe el nombre" name="nombre" required>
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Por favor, rellene este campo</div>
        </div>

        <div class="form-group">
            <label for="nombre">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" placeholder="Escribe la descripción" name="descripcion" required>
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Por favor, rellene este campo</div>
        </div>

        <div class="form-group">
            <label for="nombre">Precio</label>
            <input type="number" class="form-control" id="precio" placeholder="Escribe el precio" name="precio" required>
            <div class="valid-feedback">Válido</div>
            <div class="invalid-feedback">Por favor, rellene este campo</div>
        </div>

        <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember" required> Accepto los cambios
              <div class="valid-feedback">Válido</div>
              <div class="invalid-feedback">Marque esta casilla para continuar</div>
            </label>
          </div>

        <button type="submit" class="btn btn-primary">Insertar</button>
    </form>

    </div>

    @include('includes.footer')
</body>
</html>
