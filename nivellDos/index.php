<?php
    echo "<h1>Nivell 2</h1>";
    echo "<h3>Ejercicio 1</h3>";

    $arrayNumber1 = array(0, 2, 3, 4, 5, 6);
    $arrayNumber2 = array(4, 5, 6, 7, 8, 9);

    echo "<p>Buscando numeros en comun en los Arrays con funcion array_intersect()</p>";

    $result = array_intersect($arrayNumber1, $arrayNumber2);
    print_r($result);

    echo "<p>Mescla de los dos Arrays</p>";
    print_r(array_merge($arrayNumber1, $arrayNumber2));

    echo "<h3>Ejercicio 2</h3>";
    $arrayAlumnos = array(
    "Maria"   => array(5, 7, 9, 8, 5),
    "Amaya"   => array(6, 7, 8, 9, 10),
    "Laya"    => array(9, 7, 8, 9, 7)
    );

    function calcularMediaAlumno($arrayAlumno) {
        $totalNotas = array_sum($arrayAlumno);
        $cantNotas = count($arrayAlumno);
        return $totalNotas / $cantNotas;
    }
    
    function calcularMediaClase($arrayAlumnos) {
        $totalMedias = 0;
        foreach ($arrayAlumnos as $arrayAlumno) {
            $totalMedias += calcularMediaAlumno($arrayAlumno);
        }
        $sumaNotasTotal = count($arrayAlumnos);
        return $totalMedias / $sumaNotasTotal;
    }
    
    foreach ($arrayAlumnos as $alumno => $notas) {
        $notaMediaAlumno = calcularMediaAlumno($notas);
        echo "La nota Media de $alumno es: $notaMediaAlumno<br>";
    }
    
    $mediaClase = calcularMediaClase($arrayAlumnos);
    echo "<br> La Media general de la clase es : $mediaClase";
    
