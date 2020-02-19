<!DOCTYPE html>
<html lang="es">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 
     <!-- Course CSS -->
     <link rel="stylesheet" href="../css/estilo.css">
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>CONTACTO</title>
     
 </head>
</head>
<body>
    <?php
        session_start();
        require_once("header.php");
        require_once("conecta.php");
        
    ?>
 

       <div id="contenedor">       
       <div id="contenido">
            <div id="titulos">
                <span class="titulo">CONTACTO</span>
            </div>
           <div id="entradas">
                <p>Después de trabajar 14 años en el departamento de diseño del El Corte Inglés, y siendo luego la otra mitad de Codi durante 3 años, iniciamos este nuevo viaje cargados de ilusión y ganas, para ofrecerles a nuestros clientes la mejor versión nosotros mismos y transmitirlo en nuestros trabajos personalizados.</p>
                <br><br>
                <p>Diseño gráfico, rótulos, ilustración, rotulación de vehiculos, identidad corporativa, vinilos, redes sociales, web, serigrafía, lonas, banderas impresión gran formato, tarjetas, flyers, merchandising, banderolas, roll-up, y mucho más. Damos visibilidad a tu negocio.Te asesoramos sin compromiso</p>
            </div>           
       </div>
            
    <?php
        require_once("aside.php");
    ?>

    </div> <!--CONTENEDOR--> 


    <?php
  
        mysqli_close($conexion);   
        require_once("footer.php");
   
    ?>
 
    
</body>
</html>