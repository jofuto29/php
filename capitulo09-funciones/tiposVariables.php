<?php
    //a veces es necesario acceder a variables externas con respecto a la funcion, estas se denominan variables globales
    function inflacion($precio,$suba){
        $precio = $precio * $suba;

        global $augmento; //variable global, la podemos gatar fuera del ambito de la funcion, las locales no
        $augmento = 1;
        return $precio;
    }

    $p = inflacion(1000,10); //p = 1000*10

    echo $augmento."<br>";
    $augmento = $augmento *3; //augmento = 3; 
    echo "<p> augmento: ".$augmento."</p>";
    echo "<p> precio: ".$p."</p>";
    echo "volvemos a llamar a la funcion inflacion: <br>";
    $p = inflacion($p,10);

    echo "<p> augmento: ".$augmento."</p>";
    echo "<p> precio: ".$p."</p>";

    //hay una matriz que almacena todas las variables globales que se hayan declarado a lo largo del archivo php $GLOBALS["nombre"], aqune es desaconsejable, es mejor pasarle el 
    //valor como parametro a la funcion

?>