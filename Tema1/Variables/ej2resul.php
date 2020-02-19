<?php

    $x=(int)$_POST['x'];
    $y=(int)$_POST['y'];
    $suma=$x+$y;
    $resta=$x-$y;

    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo 'Division:'.$x/$y.'</br>';
    echo 'Multiplicacion:'.$x*$y.'</br>';

?>
