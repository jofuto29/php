<?php
    if(isset($_POST["eleccion"])){
        /*si este argumento exite en el array es que acaba de enviar el formulario con los estilo que el quiere utilizar*/

        $hoja = $_POST["eleccion"]; //variable que utilizaremos dentro de link para utilizar los estilos
        setcookie("elegido",$hoja, time() + (60 * 60 * 24 * 30)); //cookie con nombre elegido con valor que nos pasa usuario y duracion 30 dias
    }
    else{
        /*si no encontramos dato, busquemos s esta guardado en el array de cookies, realizado en una consulta anterior*/

        if(isset($_COOKIE["elegido"])){
            $hoja = $_COOKIE["elegido"]; //si esta, guardamos en la misma variable que utilizaremos para cambiar los estilos
        }
        else{
            //si no encontrtamos nada, pues mostraremos estilos por defecto
            $hoja = "hoja-por-defecto";
        }
    }
?>
<!DOCTYPE html>
    <html lang="es">
        <head>
            <title>UTILIZANDO COKKIES PARA ELEGIR ESTILOS</title>
            <meta charset= "utf-8">

            <?php
                //$hoja debe tener un valor si o si
                if(isset($hoja)){
                    echo '<link rel="stylesheet" type="text/css" href="./archivosCSS/'.$hoja.'.css" />';
                }
            ?>

        </head>

        <body>
            <h1>ELIJAMOS UN DISEÑO</h1>
            <form action="pagina.php" method="post">
                <fieldset>
                    <p>cambia el estilo a tu gusto: </p>
                    <select name="eleccion">
                        <option value="minimalista">Minimalista</option>
                        <option value="antigua">Antigua</option>
                        <option value="moderna">Moderna</option>
                        <option value="zoom">Fuentes Grandes</option>
                    </select>
                    <input type="submit" value="Elegir">
                </fieldset>
            </form>
        </body>
    </html>
