<?php
/* en este caso vamos a pasa la sesion sin que el usuario tenga que utilizar cookies, es caso b por si acaso el usuario no puede utilizar cookies que si pueda manterner la sesion abiertas
puede ocurrir que el servbidor nos obliga a utilizar solo cookies, si la variable en php.ini llamada seesion.use_only_cokkies=on pero si esta en off o lo cambiamos podremos utilizar metosos
alternativos a las cookies.
el metodo alternativos consiste en agregar constantemenre el SID en todos los enlaces y formularios para todoas la URLS

el ejemplo anteior quedaria de la siguiente manera

en vez de poner el SID podemos poner dos unciones que hacen exactamente lo mismo el enlace quedaria:
<p><a href="sesion022.php <?php echo session_name();?>=<?php echo session_id();?> ">siguiente pagina</p>
*/

session_start();
?>
<!DOCTYPE html>
<html land="es">
    <?php echo "su nombre es: ". $_SESSION["nombre"]; ?>
    <p><a href="sesion022.php <?php echo SID;?> ">siguiente pagina</p>
</html>
