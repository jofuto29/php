<?php
    if($abierto= fopen("archivo.txt", "r")){ 
       
        //esta funcion lee los caracteres que le indicamos hasta un maximo de 8192, se utiliza para leer textos pequeños, frases de dia...
        $caracteres_leidos = fread($abierto,20);//20 indica la catidad de caracteres a leer
        echo $caracteres_leidos;

        fclose($abierto);
    }else{
        echo "el archivo no pudo abrirse";
    }
?>