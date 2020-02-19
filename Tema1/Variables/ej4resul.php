<?php

    $radio=(int)$_GET['radio'];
   
    define("pi",3.1416); 
    $area=pi*($radio*$radio);                 
    $longitud=2*pi*$radio; 

    echo "El área es $area y la longitud es $longitud";

?>
