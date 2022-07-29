<?php
//esta funcion es la unica que no requiere que habramos el archivo, ni lo cerremos, convierte todas las lineas en datos dentro de un array
$archivo = "archivo.txt"; //especificamos la ruta del archivo
$archivo2 = "imagenes.txt";

$lineas = file($archivo);
$imagenes= file($archivo2);
//recorremos todos los datos del archivo y se los mostramos al usuario:
for($i = 0; $i < count($lineas); $i++){
    echo "en la linea ".($i+1)." tenemos: ".$lineas[$i]."<br>";
}

//tambien podemos mezclar el contenido de esta matriz que hemos creado, y elegir uno aleatoriamente
shuffle($lineas);
echo "<p> la frase del dia es ".$lineas[0]."</p>";
//de igual manera lo podemos hacer con imagenes
shuffle($imagenes);
echo '<img src="imagenes/'.$imagenes[0].'" width="280" height="200"><br>';

echo "los indintificadores de cada archivo son: <br>";
echo "archivo1 --> $archivo  <br>";
echo "archivo2 --> $archivo2 <br>";
?>