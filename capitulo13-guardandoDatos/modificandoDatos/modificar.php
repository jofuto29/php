<?php
//deberemos validar si realmente ha llegado la informacion que esperabamos
//para borrar elementos de una tabla debemos hacer los mismo pasos que hemos estado haciendo hasta ahora exceptuando que la orden sera DELETE de SQL
//DELETE FROM tabla WHERE campo = 'x'; el where es necesario si nos estariamos borrando todos los datos de la tabla

include("../../capitulo12-llevandoDatos/organizacion/datos.php");
include("../funciones.php");

if(isset($_GET["codigo"])and $_GET["codigo"]<>""){
    if($enlace = conectar($host,$usuario,$clave,$base)){
        echo "<p> conexcion realizada </p>";
        $condicion = $_GET["codigo"];
        //validamos que hayan llegado todos los datos del formulario
    
        //creamos la orden que ejecutaremos en SQL
        $orden = "DELETE FROM empleados WHERE id = '$condicion'";
    
        if(@mysqli_query($enlace,$orden)){
            echo "<p>el registro se elimino correctamente </p>";
            echo '<p>volver a la pagina de administracion: <a href= "empleados.php"> --volver -- </a></p>';
        }else{
            echo "<p>No se pudo completar la inserccion en la base de datos, vuelve a intertarlo mas tarde </p>";
        }
    }else{
        echo "<p> se ha producido un error intentanto conectar a la base de datos </p>";
    }
}else{
    echo '<p>no se especifico que deseas borrar, porfabor vuelve a: <a href= "empleados.php"> --listado -- </a></p>';
}


/*
<?php
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_basededatos";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query="CREATE TABLE tablename(id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,field1-name varchar(20) NOT NULL,field2-name varchar(20)NOT NULL,field3-name varchar(20) NOT NULL,field4-name varchar(30) NOT NULL, field5-name varchar(30)NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
$mysqli->query("$query");
$mysqli->close();
?>


*/


?>
