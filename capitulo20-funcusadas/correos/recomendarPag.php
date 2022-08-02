<?php
//----------------------------------------------------------FUNCION MAIL() --------------------------------------------------------------------------------------------
/**En el caso de recomendar una pagina, el usuario escribira en el formulario una cuenta de correo de un amigo al que le quiera recomendar la pagina. para evitar problemas
 * el asunto y el cuerpo del mensaje sera definido por nosotros
*/

$asunto = "sitio www.sitio.ar.com";
$mensaje = "Querido ".$_POST["nombre_p"]." su persona de cofianza ".$_POST["nombre"]." le recomienda el sitio www.sitio.ar.com";

//enviamos mensaje al que nos ha recomendado
if(mail($_POST["email"], $asunto, $mensaje)){
    print("<p>".$_POST["nombre"].", muchas gracias por su mensaje </p>");
}else{
    print("<p>el mensaje no pudo ser enviado</p>");
}

//pero seria interesante guardarnos la informacion de los subscritores
$asunto = "nueva recomensacion";
$mensaje = "Querido ".$_POST["nombre_p"]." su persona de cofianza ".$_POST["nombre"]." le recomienda el sitio www.sitio.ar.com";
$destino = "llocalhost9@localhost.com";

if(mail($destino, $asunto, $mensaje)){
    print("<p>muchas gracias por su mensaje </p>");
}else{
    print("<p>el mensaje no pudo ser enviado</p>");
}
?>