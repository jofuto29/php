<?php
//FUNCION EXPLODE ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //la tecnica de almacenamineto de datos consiste en agregar lineas subdividiendo en partes la informacion que proporciona el usuario por ejemplo:
    //usuario1:clave1 usuario2:clave2
    //pepe|perez|24|soltero
    //si solo fuera necesario acceder a uno de estar partes necesitamos saber cual es el caracter que actua como separador, y sabiendo esto podemos utilizar la funcion explode()

    $filas = file("usuarios.txt");
    for($i=0; $i<count($filas); $i++){
        $partes = explode("|", $filas[$i]);
        print("<p>usuario: $partes[0], contraseña: $partes[1], @mail: $partes[2]");
    }
    //tambien podriamos utilizar esta funcion para cargar todo el texto quitando los espacios en blanco y luego contar el numero de palabras que tiene simplemente contando el 
    //numero de huecos que tendria la matriz generada


//FUNCION IMPLODE-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //podemos recoger diferentes datos y unirlos en una linea, para ello usamos la funcion implode
    $datos = array("jose","68546","jose@gmail.com"); //datos que podria recibirse a traves de un formulario
    $todo_unido = implode("|",$datos);
    print("<p>".$todo_unido."</p>");//esto ahora se podria escribir en usuarios.txt como vimos en el capitulo anterior
?>