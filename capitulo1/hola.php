<!DOCTYPE html>
<html lang="es">
<head>
    <title>PRIMERO CODIGO PHP</title>
</head>
<body>
    <p>esto escrito en html</p>
    <?php 
        print("<p>HOLA MUNDO, interpretado por el interprete php del servidor apache</p>");
    ?>
    <!-- podemos habrir tantas etiquetas php como sea necesario-->
    <?php 
        print("<p>esto tambien ha sido interpretado por el interprete</p>")
    ?> 
    <p><a href="../../index.php"><?php print("volve al home del sitio, mediante php")?></a></p> 
</body>
</html>

