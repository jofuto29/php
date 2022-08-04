<?php
    //incluimos como hemo hablado anteriormente los datos que necesitamos
    include("datos.php");
    include("funciones.php");

    $consulta0 = "SELECT * FROM empleados WHERE especialidad = 'Matematicas' ";

    if($enlace = conectar($host,$usuario,$clave,$base)){
        echo "<p> conexcion realizada </p>";

        if($datos = consultar($enlace,$consulta0)){
            echo "<p>consulta realizada correctamente </p>";

        }else{
            echo "<p>error al realizar la consulta</p>";
        }
    }else{
        echo "<p> se ha producido un error intentanto conectar a la base de datos </p>";
    }

?>