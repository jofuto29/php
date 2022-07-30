<?php 
    session_start();

    if(isset($_POST["idioma"])){
        $_SESSION["idioma"] = $_POST["idioma"];
        $idioma= $_POST["idioma"];
        include("idiomas/$idioma.php");
    } else if(isset($_SESSION["idioma"])){
        $idioma= $_SESSION["idioma"];
        include("idiomas/$idioma.php");
    } else{
        include("idiomas/castellano.php"); //idioma por defecto
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>cambio de idioma dinamico</title>
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
    <div id="titulo"><?php echo TITULO; ?></div>
    <div id="subtitulo"><?php echo SUBTITULO; ?></div>
    <div id="avance"><?php echo AVANCE; ?></div>
    <div id="noticia"><?php echo NOTICIA; ?></div>
    <br>

    <div id= "menu">
        <form name="formulario" method="post" action="idiomas.php">
            <fieldset>
                <legend>ELIJA EL IDIOMA PREFEREIDO </legend>
                <select name="idioma"> <!-- en el select ponemos el nombre de la variable que se enviara mediante el metodo post-->
                    <option value="castellano">Castellano</option>
                    <option value="ingles">ingles</option>
                </select>
                <br>
                <input type="submit" value="enviar">
            </fieldset>
        </form>
        <br>
        <form name="formulario" method="post" action="dest.php">
            <fieldset>
                <input type="submit" value="destuir sesion">
            </fieldset>
        </form>
    </div>
    
</body>
</html>