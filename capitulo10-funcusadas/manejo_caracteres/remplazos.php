<?php
//la funcion STR_REPLACE: un uso que le podemos dat es convertir en caracteres usados en emoticonos por sus correpondiendte imagen: 

    $cadena = "comentario alegre :-) saludos <br>";
    print($cadena);
    $caracter = ":-)";
    $reemplazo = '<img src="sonrisa.png" alt="sonrisa">';

    $intercambio = str_replace($caracter,$reemplazo,$cadena);
    print("al ser remplazado por la imagen con str_replace: ".$intercambio);
?>