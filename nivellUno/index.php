<?php
    echo '<h2>Ejercicio 1 Arrays</h2>';
    $numeros = array(1, 2, 3, 4, 5);
    echo 'Imprimindo valores de lo Array --> ';
    print_r($numeros);
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
    
    echo '<h2>Ejercicio 3 Arrays</h2>';

    function encuentraChar($arrayPalabras, $letra){
        foreach($arrayPalabras as $palabra) {
            if(stripos($palabra, $letra) === false){
                return false;
            }
        }
        return true;
    }

    $palabras = ["hola", "Php", "Html"];
    $letra ="h";
    
    if(encuentraChar($palabras, $letra)){
        echo "El caracter: '$letra' fue encontrado en todas las palabras de lo Array";
    }else{
        echo "El caracter: '$letra' no esta presente en todas las palabras de lo Array";
    }
    
    echo '<h2>Ejercicio 4 Arrays</h2>';
    $arrayAboutMe = array(
        "nombre"    => "Myrella",
        "edad"      => 31,
        "email"     => "myrella@itAcademy.es",
        "comidaFav" => "Pizza" 
    ); 
    echo "Nombre: ".$arrayAboutMe['nombre']."<br>";
    echo "Edad: ".$arrayAboutMe['edad']."<br>";
    echo "Email: ".$arrayAboutMe['email']."<br>";
    echo "Comida Favorita: ".$arrayAboutMe['comidaFav']."<br>";
?>