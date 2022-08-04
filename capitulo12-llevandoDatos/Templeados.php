<!DOCTYPE html>
<html>
    <head>
        <title>RESULTADO CONSULTAS</title>
    </head>

    <body>
    <?php
        //VAMOS A MOTRAR DISTINTAS CONSULTAS: lo que vimos en el libro anterior,parte01, consultas SQL simples
        $consulta0 = "SELECT * FROM empleados WHERE especialidad = 'Matematicas' ";
        
        //operador like
        $consulta1 = "SELECT * FROM empleados WHERE especialidad LIKE '%M%'";//%puede sustituirse por qualquier cosas, por tanto cojera todos los registros que contengas principio medio o final una m
        $consulta2 = "SELECT * FROM empleados WHERE especialidad LIKE 'M%' ";//todos aquellos que empiezen exclusivamente por M
       
        //operador between, para rangos
        $consulta3 = "SELECT * FROM empleados WHERE edad BETWEEN 18 AND 40";
        $consulta4 = "SELECT * FROM empleados WHERE edad BETWEEN 40 AND 50"; //excluimos a los viejunos
        $consulta5 = "SELECT * FROM empleados WHERE (pais = 'España' AND especialidad = 'Sistemas') OR (pais = 'Argentina') ";//tipico uso de la y y la o

        //podemos buscar coincidencias con varios valores con el operador in
        $consulta6 = "SELECT * FROM empleados WHERE pais IN('México','Argentina','Perú')";
        
        //odenando el resultado
        $consulta7 = "SELECT * FROM empleados WHERE edad BETWEEN 18 AND 40 ORDER BY apellido"; // ordenado de menor a mallor
        $consulta8 = "SELECT * FROM empleados WHERE edad BETWEEN 18 AND 40 ORDER BY apellido DESC"; //ordenador de mallor a menor

        //limitando registros resultado devueltos
        $consulta9 = "SELECT * FROM empleados ORDER BY apellido LIMIT 0,3 "; //limita a 3 registros el resultado, si en lugar de comenzar en 0, comenzamos en 3, son los 3 siguientes

        //obtener todoas las especialidades que tenemos, sin repetir ninguna utilizaremos el operador Disctint
        $consulta10 = "SELECT DISTINCT especialidad FROM empleados "; //en esta ultima consulta nos devolvera un error pues la tabla que hemos creado espera mas datos

        /*funciones estadisticas
            COUNT --> cuenta el numero de registros que tiene la consulta resultante
            MIN --> valor minimo almacenado en ese campo
            MAX --> Valor maximo almacenado en ese campo
            SUM --> el sumatorio de los valores de ese campo
            AVG --> la media de todos los valores de ese campo
        
        una consulta que devuelva la media de las edades de todos los empleados quedaria:
        */
        $consulta11 = "SELECT AVG(edad) FROM empleados"; //no la voy a realizar pues la tabla que he creado no esta preparada para mostrar este tipo de consultas, mas adelante soluciono esto
    

        $consultas = array($consulta0,$consulta1,$consulta2,$consulta3,$consulta4,$consulta5,$consulta6,$consulta7,$consulta8,$consulta9,$consulta10);

        if($conexion = mysqli_connect("localhost","root","contraseña","cursos")){

            echo "<h1>CONSULTAS</h1>";

            for($i = 0; $i < count($consultas); $i += 1){
                if($datos= mysqli_query($conexion,$consultas[$i])){
                    echo "<h3> consulta: $consultas[$i] realizada</h3>";
                    echo "<h3>REGISTRO CONSULTA $i:</h3>";
                ?>

                <!-- Ya tenemos los datos de la consultaX, vamos a crear los parametros de la tabla y le añadimos ademas un borde pa que quede mas bonico-->
                <table border="1">
                    <tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>apellido</td>
                        <td>edad</td>
                        <td>pais</td>
                        <td>especialidad</td>
                    </tr>

                    <?php
                    while($fila = mysqli_fetch_array($datos)){
                    ?>
                    <!-- ahora añadimos los valores guardados en $fila de la consultaX-->
                        <tr>
                            <td><?php echo $fila['id']?></td>
                            <td><?php echo $fila['nombre']?></td>
                            <td><?php echo $fila['apellido']?></td>
                            <td><?php echo $fila['edad']?></td>
                            <td><?php echo $fila['pais']?></td>
                            <td><?php echo $fila['especialidad']?></td>
                        </tr>
                    <?php
                    }
                    echo "</table><br><br>";
                }else{
                    echo "ha fallado la consulta <br>";
                }
            }
        }else{
            echo "no pudo conectarse a la base de datos<br>";
        }
    ?>
    </body>
</html>