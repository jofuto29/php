<?php
/*
Un punto fundamental cuando cuando vamos a enviar datos es proteger la base de datos de ataques con injeccion SQL, vamos a ver un ejemplo real en la tabla usuarios, de lo que podria pasar
si no limpiamos lo que puede escribir el usuario
*/
include("../datos.php");
include("../funciones.php");

    //validamos que hayan llegado todos los datos del formulario
if(isset($_POST["usuario"],$_POST["contraseña"]) and ($_POST["usuario"]!= "" and $_POST["contraseña"]!= "")){ 
    echo "<p>datos recibidos correctamente </p>";

    if($enlace = conectar($host,$usuario,$clave,$base)){
        echo "<p> conexcion realizada </p>";

        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

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


/*
si lo dejamos tal cual esta, se logeara pefectamente si el usuario que introducimos esta registrado en la base de datos, pero ademas si colocamos la siguiente contraseña: ' OR ' ' = '
hacemos que la consulta que se realiza a la base de datos quede: la consulta quedara: SELECT * FROM usuarios WHERE usuario = 'qualquiera' and contraseña = '' OR ' ' = ''
osea que siempre sera verdadera por el or, y el resultado de la consulta seran todos los usuarios que se encuentre registrados en esa tabla. Si ponemos el usario y la contraseña
de un usuario registrado la consulta solo devolvera ese usuario oviamente.

*/
?>