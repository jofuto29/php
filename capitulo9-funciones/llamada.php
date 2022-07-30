<?php
    //incluimos el otro archivo donde declaramos la funcion --> estos archivos que se incluyen veremos en muchos lugares que se refieren a ellos como bibliotecas.
    include("declaracion.php");

    $array1 = array("plantas","edificios","azoteas","sotanos","entradas");
    $array2 = array("escaleras","puertas","pasillos","ascensores","salidas");
    
    echo "<h1>PRIMERA LISTA</h1>";
    echo listar_matriz($array1);
    
    echo "<h2>SEGUNDA LISTA</h2>";
    $resultado = listar_matriz($array2);
    echo $resultado;
    
    //llamadas a las demas funciones que se incluyen en declaracion.php

    echo "el cuadrado de 2 es: ".cuadrado(2);

    echo "<p>".listar("archivo.txt","listado archivo.txt")."</p>";

    echo "<p> el augmento para este señor con sueldo = 1000 y lo augmentamos 20% sera : ".augmento(1000,20)." </p>";

    contarVisitas();

    echo tablear(10);



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>probando funciones</title>
        <meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8" />
        <link rel="stylesheet" href="../capitulo8-bucles/lista.css" />
    </head>

    <body>
    </body>
</html>