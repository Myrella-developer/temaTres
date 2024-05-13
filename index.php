<?php
    echo '<h2>Ejercicio 1 Arrays</h2>';
    $numeros = array(1, 2, 3, 4, 5);
    echo 'Imprimindo valores de lo Array --> ';
    echo $numeros[0].' ';
    echo $numeros[1].' ';
    echo $numeros[2].' ';
    echo $numeros[3].' ';
    echo $numeros[4].' ';

    echo '<h2>Ejercicio 2 Arrays</h2>';
    $X = array(10, 20, 30, 40, 50, 60);
    echo 'Imprimindo tamaño de lo Array con funcion count() --> ';
    echo count($X);
    echo '<br>Eliminando item<br>';
    unset($X[2]);
    var_dump($X);
    $newX = [];
    foreach($X as $posicion => $number) {
        $newX[] = $number;
    }
    echo '<br>Reorganizando indices<br>';
    var_dump($newX);
    echo '<br>Imprimindo nuevo tamaño de lo Array --> '.count($newX);
    
?>