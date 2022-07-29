<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Zona de acceso restringido</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
// 1. Si acaban de enviar el formulario de acceso, leemos de $_POST los datos:
if( isset($_POST["user"]) and isset($_POST["pass"]) ){
// 2. En ese caso, verificamos que no est�n vac�os:

	if( $_POST["user"]=="" or $_POST["pass"]=="") {
		
		echo "Por favor, completar usuario y clave";
		// 3. Si no estaban vac�os, comparamos lo ingresado con el usuario y clave definidos por nosotros, en este caso "pepe" y "123456". Aqu� modificaremos esos datos y los cambiaremos por el usuario y clave que nos gusten.
		
	} elseif ($_POST["user"]=="jose" and $_POST["pass"]=="123456"){
	// 4. Si eran correctos los datos, los colocamos en variables de sesi�n:
	
		$_SESSION["user"]=$_POST["user"];
		$_SESSION["pass"]=$_POST["pass"];
		
		echo "Usted se ha identificado como: ".$_SESSION["user"];

	}
    else{
        echo "los datos no eran correctos";
    }
}
?>
<div id="menu">
  <ul>
    <li><a href="primera.php">Primera p&aacute;gina privada</a></li>
    <li><a href="segunda.php">Segunda p&aacute;gina privada</a></li>
    <li><a href="tercera.php">Tercera p&aacute;gina privada</a></li>
  </ul>
</div>
<!-- 
<div id="formulario">
  <form name="acceso" method="post" action="ejemploCompleto.php">
    <fieldset>
    <legend>Ingrese sus datos de acceso:</legend>
    <label for="usuario">Su usuario:</label>
    <input type="text"
id="usuario" name="usuario" />
    <br />
    <label for="clave">Su clave:</label>
    <input type="text"
id="clave" name="clave" />
    <br />
    <input type="submit" id="ingresar" name="ingresar"
value="Ingresar" />
    <br />
    </fieldset>
  </form>
</div>
-->
</body>
</html>