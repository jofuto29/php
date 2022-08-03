<?php
//VAMOS A MOTRAR DISTINTAS CONSULTAS:
$consulta1 = "SELECT * FROM mensajes WHERE especialidad = 'Matematicas'";


if($conexion = mysqli_connect("localhost","root","contraseña","cursos")){
    echo "se conecto correctamente a la base de datos <br>";

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