<?php
/**
* mientras no se cumpla la condicion el bucle seguira funcionando
* while($ganador != "SI"){  $ganador= leer_apuesta(); }
*
* podemos de igual manera mediante las funciones list y each recorrer un array con el bucle while aunque resultaria mas facil hacer simplemente con un foreach
* each=> captura el elemento actual de una matriz, y desplaza el indice al siguiente valor. ademas de ese elemento crea 4 elementos 0 = indice, 1= valor, key=indice, value=valor
* list=> la funcion list guarda en la primera variable el indice que le devuelve each y en el segudno el valor.
*/

$animales["nombre"] = "el gato";
$animales["edad"] = "el perro";
$animales[10] = "el aguila";
$animales[17] = "la serpiente";
$animales[2] = "el raton";

$este = each($animales["nombre"]); //no funcion funcion obsoleta en php5

print("<p>el indice de este elemento es ".$este[0]);
print("<p>el valor de este elemento es ".$este[1]);
print("<p>el indice de este elemento es ".$este["key"]);
print("<p>el valor de este elemento es ".$este["value"]);

while(list($indice,$valor) = each($animales)){ //cuando la asignacion realizada sea falsa se saldra del buvcle
  echo "<p> el elemento en la posicion $indice es $valor </p>";
}

?>