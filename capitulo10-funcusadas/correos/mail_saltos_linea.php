<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Envíos</title>
</head>
<body>
<?php
$destino = "alguien@sitio.com";
$asunto = "Datos de contacto";
$cuerpo = '<h1>Promoción especial</h1><p>Visite nuestra <a href="http://www.sitio.com">página web</a> y aproveche esta oferta: <img src="http://www.sitio.com/imagenes/promocion.jpg" alt="¡Tres paquetes por un peso!" /></p>';

$cabeceras = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\nFrom: Hernán Beati <hernan@beati.com.ar>\r\n";
// Notemos cómo cada cabecera se separa de otra mediante un salto \r\n

if (mail ($destino, $asunto, $cuerpo, $cabeceras)){

	print ("<p>Gracias por su consulta en formato HTML</p>");

} else {

	print ("<p>Ha fallado el servidor de correos, intente nuevamente</p>");

}
?>
</body>
</html>