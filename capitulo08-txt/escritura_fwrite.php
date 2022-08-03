<?php
    $abierto = fopen("deposito.txt","a"); //solo cambiando el modo de apertura de w a a, no borrar lo que habia en el deposito si no que añadira a contiinuacion del ultimo valor

    $usuario     = $_POST["usuario"];
    $email       = $_POST["email"];
    $contraseña  = $_POST["contraseña"];
    $contraseña2 = $_POST["contraseña2"];

    if(isset($_POST["usuario"], $_POST["email"], $_POST["contraseña"], $_POST["contraseña2"])){

        if(($contraseña == $contraseña2)){
            $texto  = $usuario." -- ".$email." -- ".$contraseña;

            if(fwrite($abierto, $texto.PHP_EOL)){ 
                print("<p>GRACIAS POR REGISTRARSE</p>"); 
            }else{   
                print("SE HA PRODUCIDO UN ERROR, INTENTELO MAS TARDE"); 
            }

        }else{
            echo "<p>LAS CONTRASEÑAS NO COINCIDEN</p>";
        }

    }else{
        echo "<p>debe rellenarse los datos d del formulario </p>";
    }

    fclose($abierto);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title> registro usuario</title>
        <meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8" />
    </head>

    <body>
        <form action="escritura_fwrite.php" method="post"> <!-- action indica la url donde se enviaran los datos mientras que method, le a http que metodo se utilizara-->
            <legend>REGISTRARSE</legend>
            <ul>
                <li>
                  <label for="name"> USUARIO:</label>
                  <input type="text" id="name" name="usuario"> 
                </li>
                <li>
                    <label for="name">- @email:</label>
                    <input type="text" name="email">
                </li>
                <li>
                    <label for="name">- CONTRASEÑA:</label>
                    <input type="text" name="contraseña">
                </li>
                <li>
                    <label for="name">- REPETIR CONTRASEÑA:</label>
                    <input type="text" name="contraseña2">
                </li>
                <br><br>
                <li class="button">
                    <button type="submit">Envíar</button>
                </li>
            </ul>
        </form>
    </body>
</html>
