<?php
/*
En algun momento tendremos que hacer el camino inverso, en el camino anterior leiamos datos de la base de datos, ahora guardaremos datos en la base de datos.
Dos tipos de usuarios podran agragar datos:
    A) Administradores--> protegida con usuario y contraseña, se encargaran de agragar nuevos productos al catalogo, agragar nuevas noticias en un portal.
    B) Usuarios --> cuando agregen un comentario a una noticia, un mensaje en un foro, complenten sus datos en un formulario de registro.

El proceder en ambos casos sera el mismo, se agregaran los datos en un documento html que sera enviado a otro php que conectara con la base de datos y enviara los datos para ser insertados
    
como vemos gastaremos funciones que declaramos en el capitulo anterior
*/

//como estan en un directorio distinto ../ para ir a php y luedo entramos en capitulo12
include("../../capitulo12-llevandoDatos/organizacion/datos.php");
include("../../capitulo12-llevandoDatos/organizacion/funciones.php");


/*
Ahora no tendremos que consultar datos a la base de datos asi que no hay que hacer una consulta, tendremos que añadir algo, para ello esta la instruccion INSERT de SQL que tiene la siguiente
sintaxis: INSSERT INTO nombre_tabla(CAMPO 1, CAMPO 2, CAMPO 3) VALUES ('valor1','valor2','valor3'), en el caso de ser el atributo id, pondremos un 0 ya que por lo general lo declaramos
autoincremente, y sera el motor SQL el que le asigne un valor a ese campo.
*/



if($enlace = conectar($host,$usuario,$clave,$base)){
    echo "<p> conexcion realizada </p>";
    @mysqli_query($enlace,"SET NAMES 'utf8'"); //a mi probando no tengro problemas en añadir tildes ni ñ, pero si hubiese esta orden le especifica que utilizamos la codificacion utf8
    
    //validamos que hayan llegado todos los datos del formulario
    if(isset($_POST["name"],$_POST["mail"],$_POST["msj"]) and ($_POST["name"]!= "" and $_POST["mail"]!= "" and $_POST["msj"]!= "")){ //en mi opinion la parte del isset sobra
        
        echo "<p>datos recibidos correctamente </p>";
        $nombre = $_POST["name"];
        $email = $_POST["mail"];
        $msj = $_POST["msj"];

        //creamos la orden que ejecutaremos en SQL
        $orden = "INSERT INTO mensajes(id,nombre,email,mensaje) VALUES('0','$nombre','$email','$msj')";
        echo "el insert que se realizara a la base de datos:<br>".$orden."<br>";

        if(@mysqli_query($enlace,$orden)){
            echo "<p>los datos se insertaron correctamente</p>";
        }else{
            echo "<p>No se pudo completar la inserccion en la base de datos, vuelve a intertarlo mas tarde </p>";
        }
    }else{
        echo '<p>error al recibir los datos del formulario, porfavor rellene todos los datos <a href="formularioConsulta.html"> --formulario-- </a></p>';
    }
}else{
    echo "<p> se ha producido un error intentanto conectar a la base de datos </p>";
}

?>