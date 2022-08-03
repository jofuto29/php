<?php
session_start();
echo "Usted se ha identificado como: ".$_SESSION["usuario"];
if( isset($_SESSION["usuario"]) and $_SESSION["usuario"]<>""){

	echo "Usted se ha identificado como: ".$_SESSION["usuario"];
	// Notemos que dejamos SIN CERRAR la llave del if
	
?>
<h1>PEGAR aqu� TODA LA "PAGINA SECRETA"</h1>
<div id="menu">
  <ul>
    <li><a href="primera.php">Primera p�gina privada</a></li>
    <li><a href="segunda.php">Segunda p�gina privada</a></li>
    <li><a href="tercera.php">Tercera p�gina privada</a></li>
  </ul>
</div>
<?php
// Reci�n aqu� cerramos el if
} else {
?>
	<p>La sesi�n no est� abierta, por favor utilice el <a href="inicioSesion.html">formulario de acceso</a></p>
<?php
}
?>