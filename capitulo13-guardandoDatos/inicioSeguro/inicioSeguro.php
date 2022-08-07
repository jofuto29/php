<?php

/*
Para solucionar el problema de la injeccion SQL php nos proporciona una funcion que se encarga de eliminar todos los valores especiales, cambia los valores por otros que resulten
inofensivos para una consulta SQL  --> mysqli_real_escape_string
*/
include("../../capitulo12-llevandoDatos/organizacion/datos.php");
include("../../capitulo12-llevandoDatos/organizacion/funciones.php");

    //validamos que hayan llegado todos los datos del formulario
if(isset($_POST["usuario"],$_POST["contraseña"]) and ($_POST["usuario"]!= "" and $_POST["contraseña"]!= "")){ 
    echo "<p>datos recibidos correctamente </p>";

    if($enlace = conectar($host,$usuario,$clave,$base)){
        echo "<p> conexcion realizada </p>";

        $usuario = mysqli_real_escape_string($enlace, $_POST["usuario"]);
        $contraseña = mysqli_real_escape_string($enlace, $_POST["contraseña"]);

        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";

        echo "<p> la consulta quedara: ".$consulta."</p>";
        if($paquete = consultar($enlace,$consulta)){
            echo "<p>los datos de inicio de sesion son correctos</p>";

            while($fila = mysqli_fetch_array($paquete)){
                echo $fila["id"]." -- ".$fila["usuario"]."-- ".$fila["contraseña"]."<br>";
            }
        }else{
            echo "<p>el usuario o la contraseña son incorrectos </p>";
        }
    }else{
        echo "<p> se ha producido un error intentanto conectar a la base de datos </p>";
    }
}else{
    echo '<p>error al recibir los datos del formulario, porfavor rellene todos los datos <a href="formularioInicio.html"> --formulario Inicio-- </a></p>';
}





?>