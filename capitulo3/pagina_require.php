<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Página que incluye otros archivos</title>
</head>
<body>
<div id="contenedor">
  <?php require("encabezado.php"); ?>
  <div id="contenidoPrincipal"> 
  Contenido principal 
  </div>
  <?php include_once("botonera.php"); ?>
  <?php require_once("pie.php"); ?>
</div><!-- cierre del contenedor -->
</body>
</html>