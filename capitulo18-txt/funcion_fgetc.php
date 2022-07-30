<?php
//lee un solo caracter de un archivo. oviamente puede usarse dentro de un bucle que recorra todo el contenido del archivo letra por letra hasta encontrar un caracter especial por ejemplo.
//aunque seria necesario utilizar la funcion feof, que devuelve verdadero cuando se llego al final del archivo de texto, en el caso de que no se encontrara el cacacter especial

//abrimos archivo
$abierto = fopen("archivo.txt", "r");
$cadena = "";

while(feof($abierto)==FALSE){
    $nuevo = fgetc($abierto); //guarda un caracter
    echo $nuevo."<br>";
    if($nuevo == "\n"){
        $cadena = $cadena . $nuevo;
        break; //salimos del bucle
    } else {
        $cadena = $cadena . $nuevo;
    }
}

fclose($abierto);
echo $cadena;

?>