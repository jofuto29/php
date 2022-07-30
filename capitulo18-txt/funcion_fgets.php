<?php 
//similar a la funcion fread, lee exclusivamente una linea y la cantidad de caracteres especificada.
//es muy utl cuando solo precisamos leer unos pocos caracteres por ejemplo en el caso de que alamacene nada mas que la cantidad de visitas de la pagina

$abierto = fopen("archivo.txt","r");
$cinco = fgets($abierto,6); //5 caracteres, numero que ponemos menos 1
fclose($abierto);
echo $cinco;
echo strlen($cinco); //logitud del string

?>