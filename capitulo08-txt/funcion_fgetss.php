<?php
//es identica a fgetc pero omite las etiquetas html y php que encuentre
//de igual manera fgetss solo lee una linea del archivo y termina cuando encuentra un salto de linea \n, pero de igual manera podemos recorrer el archivo conun bucle

    $abierto = fopen("clima.html","r");
    while(!feof($abierto)){
        $linea = fgetss($abierto,1024); //esta en deshuso
        echo $linea."<br>";
    }

    fclose($abierto);
?>