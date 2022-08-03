<?php
    $abierto = fopen("deposito.txt","a"); //solo cambiando el modo de apertura de w a a, no borrar lo que habia en el deposito si no que añadira a contiinuacion del ultimo valor
    fwrite($abierto,"linea1".PHP_EOL);
    fwrite($abierto,"liena2".PHP_EOL);
    fwrite($abierto,"linea3".PHP_EOL); //php_eol inserta un salto de linea en el documento

    fclose($abierto);
?>