<?php
/*
para ello deberemos eguir los sinetes pasos:
    1. programa interprete de php se identifique ante el programa gesto de mySQL
    2.una vez identificado, preparamo la orden SQL que ejecutara y nos devolvera un paquete con los datos de esa consulta
    3. por ultimo, recorremos el paquete extrallendo los datos que queramos

    para intentar establecer conexxion utilizaremos la funcion --> mysqli_connect(nombre_maquina,usuario,contraseña,nombre_baseDatos)
    
    localhost--> computadora donde se encuentra instalado el mysql. en el raro caso de que no este en la misma maquina, se le debera poner la direccion ip de la maquina donde se encuentra
    usuario --> nombre de usuario que tiene autorizacion para ejecutar consultas. En el servidor local por defecto se crea el usuario root, pero en un hosting real este usuario nos lo
    proporciona el administrador o lo creamos nosotros mediante una interfaz que se nos proporciona
    
    cursos --> nombre de la base de datos que creamos anteriormente
*/

if($conexion = mysqli_connect("localhost","root","contraseña","cursos")){
    echo "se conecto correctamente a la base de datos <br>";
    $consulta= "SELECT * FROM mensajes";
    if($datos= mysqli_query($conexion,$consulta)){
        echo "consulta realizada<br>";
        //descomprimimos el paquete, y lo guardamos todo en un array de filas
        $fila = mysqli_fetch_array($datos); //en este caso $fila tendria el primer registro de la tabla mensajes, con cuatro posiciones cuyos indices son los nombre de los campos
        echo $fila["id"]." ".$fila["nombre"]." ".$fila["email"]." ".$fila["mensaje"]."<br>"; 

        echo "-------------------separado---------------------<br>";
        while($fila = mysqli_fetch_array($datos)){
            echo $fila["id"]."-- ".$fila["nombre"]."-- ".$fila["email"]." --".$fila["mensaje"]."<br>";
        }
        //es decir cada vez que ejecutamos mysli_fetch_array, estamos extrallendo una fila del paquete, esa fila ya no estara en el paquete

    }else{
        echo "ha fallado la consulta <br>";
    }
}else{
    echo "no pudo conectarse a la base de datos<br>";
}



?>