<?php
//a diferencia del bucle for, este siempre debe recorrer un array. la principal ventajas, es que el indice que en un bucle for debe ser numercio, aqui puede ser alfanumerico, numerico y ademas
//que los datos dentro del array se encuentren desordenados. TENEMOS DOS TIPOS DE SINTAXIS:

$animales[5] = "el gato";
$animales[21] = "el perro";
$animales[10] = "el aguila";
$animales[17] = "la serpiente";
$animales[2] = "el raton";

foreach($animales as $dato){ //recorre la matriz y guarda el valor encontrado en $dato
    echo "<p>el animal escondido era $dato</p>";
}
echo "<br><br>";
//la segunda fora de utilizar el foreach, nos permite ademas guardar el indice del dato en cuestion dentro del array:

foreach($animales as $clave => $dato){ //recorre la matriz y guarda el valor encontrado en $dato
        echo "<p>el animal escondido en posicion $clave era $dato</p>";
}
    
//debido a su eficiencia, esta debe ser la primera opcion a la hora de recorrer datos
?>