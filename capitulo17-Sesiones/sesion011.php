<?php
session_start(); //devemos poner esta funcion para que se mantega la sesion activa

$id = session_id();
echo "el identificador de esta sesion es: $id <br>";

$_SESSION["nombre"] = "pepe";
/*estos campos perfectamente podrian venir a traves de un formularios con los metodos post o get y almacenarlos en este array*/
?>
<!DOCTYPE html>
<html land="es">
    <?php echo "su nombre es: ". $_SESSION["nombre"]; ?>
    <p><a href="sesion01.php">volver</p>
</html>

