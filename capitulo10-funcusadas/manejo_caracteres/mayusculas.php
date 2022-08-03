<?php
//puede darse el caso que queramos que no haya distinicion entre mayusculas y minusculas, tenemos dos funciones para pasarlo todo a mayusculas y minusculas:
//strtolower o strtoupper
//la funcion strlen cuenta cuantos caracteres tiene un string

$claves = file("claves.txt");
$claveRecibida = "JOFUTOFUERTES"; //podriamos recibirla mediante un metodo post a traves de un formulario

$encontrado = 0;

for($i = 0; $i<count($claves); $i++){
    if( strtolower(trim($claves[$i])) == strtolower($claveRecibida)){
        $encontrado = 1;
    }
    echo strlen($claves[$i])."<br>"; //tenemos varias opciones para utilizar esta funcion, si queremos que una contraseña teng aun valor minimo o mazximo...
}

if($encontrado == 1){
    echo "logeado correctamente";
}else{
    echo "contraseña incorrecta, prebe de nuevo";
}
?>