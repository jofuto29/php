<?php
/**FUNCION PRINTF Y SPRINTF, son similares a print, es decir envian un codigo que sera interpretado en html pero podemos especificar como con una series de parametros
por ejemplo si tenemos un numero con 7 decimales podemos decir que solo se muestren 2, o tenemos un digito, podemos añadir 0 a la izquierda
sprintf --> debemos almacenar obligatoriamente el resultado de esta funcion y luego decirdir si mostrarlo en formato html o no
printf --> lo que se pone lo imprimira en html, sigue el mismo procedimiento que print
parametros que podemos añadir:
     1. --> caracter relleno(opcional)
     2. --> alineacion
     3. --> longitud minima
     4. --> decimales
     5. --> tipo de dato

*/

$fecha = sprintf("%02d-%02d-%04d",2,4,2020); //con la de decimo que es decimal, y el 02 dice que son dos digitos, 04 que son 4 digitos
print($fecha."<br>");

$decimal = 22.5;
$dec = sprintf("%01.2f", $decimal);
$decimal2 = sprintf("%01.3f", $decimal);

echo $dec."<br>";
echo $decimal2;
?>