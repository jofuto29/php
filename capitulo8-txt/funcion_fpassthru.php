<?php
    if($abierto= fopen("archivo.txt", "r")){ //aparte de saber si fopen devolvio verdadero o falso, guarda un identificador del archivo en la variable abierto
       
        fpassthru($abierto);//esta funcion lee y escribe la totalidad del texto por pantalla. es como hacer un echo de todo el texto
        
        //es recomendable cerrar el archivo una vez terminado con lo que se queria hacer, para no ocupar memoria:
        fclose($abierto);
    }else{
        echo "el archivo no pudo abrirse";
    }
?>