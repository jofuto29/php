<?php
    $nombre = $_GET["nombre"];
    echo($nombre . "<br>");
    print($_GET["nombre"]);
    echo("<br>");
    //oviamente si solo enviamos un dato, los sigueintes array no tendran valor 
    //generara un warning pues no encuentra la posicion apellido y edad en el array
    print($_GET["apellido"]);
    echo("<br>");
    print($_GET["edad"]);

    //el usar el get nos permite comprobar de mejor manera los datos que se estan enviando
    //al servidor, podemos observarlo en la url que se genera al clickar en el enlace
?>

