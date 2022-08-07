<?php
    //incluimos como hemo hablado anteriormente los datos que necesitamos
    include("datos.php");
    include("funciones.php");

    $consulta0 = "SELECT * FROM empleados";

    if($enlace = conectar($host,$usuario,$clave,$base)){
        echo "<p> conexcion realizada </p>";

        if($datos = consultar($enlace,$consulta0)){
            echo "<p>consulta realizada correctamente </p>";

            //funcion menu seleccion
            echo generarMenuSeleccion($datos,"empleados","Empleados")."<br><br>"; //no podemos gatar los dos a la vez?¿

            //funcion para mostrar datos en una tabla
            $datos = consultar($enlace,$consulta0);
            echo tablear($datos)."<br><br>";

            //crear radios
            $datos = consultar($enlace,$consulta0);
            echo crearRadios($datos,"votemos el empleados del mes","empleado")."<br><br>";

            //validar casilla
            $datos = consultar($enlace,$consulta0);
            echo crearRadios($datos,"tu voto puede sumarse a mas de un empleado","empleado")."<br><br>";

        }else{
            echo "<p>error al realizar la consulta</p>";
        }
    }else{
        echo "<p> se ha producido un error intentanto conectar a la base de datos </p>";
    }

?>