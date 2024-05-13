<?php
    echo "<h1>Nivell 2 Tema 3 Arrays</h1>";
    echo "<h3>Ejercicio 1</h3>";
    
    $arrayNumber1 = array(0, 2, 3, 4, 5, 6);
    $arrayNumber2 = array(4, 5, 6, 7, 8, 9);

    echo "<p>Buscando numeros en comun en los Arrays con funcion array_intersect()</p>";

    $result = array_intersect($arrayNumber1, $arrayNumber2);
    print_r($result);

    echo "<p>Mescla de los dos Arrays</p>";
    print_r(array_merge($arrayNumber1,$arrayNumber2));

?>