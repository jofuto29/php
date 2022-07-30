<?php 
    $productos = array(1=> "manzanas","naranajas","peras","platanos");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>bucles con condiciones</title>
    <meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8" />
    <link rel="stylesheet" href="lista.css" />
</head>
<body>
<div id="contenedor">

  <div id="productos"> 
        <p>listado de productos</p>
        <?php 
            echo "<table>";
            for($i = 1; $i <= count($productos); $i += 1){
                if($i%2==0){
                    echo '<tr class="par"><td>la fila de '.$productos[$i].' es par</td></tr>';
                }else{
                    echo '<tr class="impar"><td>la fila de '.$productos[$i].' es impar</td></tr>';
                }
            }
            echo '<tr><td>numero de productos: '.count($productos).'</td></tr>';
            echo "</table>";
        ?>
  </div>
  
</div><!-- cierre del contenedor -->
</body>
</html>