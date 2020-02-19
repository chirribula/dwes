<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php


        $nombre=$_GET['nom'];
        $mail=$_GET['mail'];
        $pobla=$_GET['pobla'];
        $frecuencia=$_GET['frecuencia'];
        $sexo=$_GET['sexo'];
        $comen=$_GET['comentarios'];
        $info=$_GET['info'];

        echo "El nombre es : ".$nombre."<br>";
        echo "El correo es : ".$mail."<br>";
        echo "La población es : ".$pobla."<br>";
        echo "El sexo es : ".$sexo."<br>";
        echo "El frecuencia es : ".$frecuencia."<br>";
        echo "<br><br>Los comentarios son : ".$comen."<br>";
        echo "Quiere info?".$info;

    ?>
</body>
</html>
