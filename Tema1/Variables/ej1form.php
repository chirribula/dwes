<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej1 formulario</title>
</head>
<body>

        <h1>Datos personales</h1>


        <form action="ej1resul.php" method="get">

            <label for="nombre">Nombre</label>
            <input type="text" size="20" name="nombre" id="nombre" required>
            <br>

            <label for="ape">Apellido</label>
            <input type="text" size="30" maxlength="20" name="ape" id="ape" required>
            <br>

            <label for="edad">Dirección</label>
            <input type="text" required name="dire" id="dire" >
            <br>

            <label for="edad">Edad</label>
            <input type="number" required name="edad" id="edad" size="5" maxlength="2" min="18" max="99">
            <br>

            <label for="movil">Móvil</label>
            <input type="text" required name="movil" id="movil" size="15" maxlength="9">
            <br>
            <br>
            <input type="submit" value="enviar">
        </form>

    
</body>
</html>