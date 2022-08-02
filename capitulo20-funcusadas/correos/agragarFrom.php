<?php
//----------------------------------------------------------FUNCION MAIL() --------------------------------------------------------------------------------------------
/**queda mejor de cara al usuario que en vez de recibir como que recibe del servidor, reciba con nombre de una persona
 * para ello tenemos el cuarto argumento de la funcion mail
*/

$asunto = "sitio www.sitio.ar.com";
$mensaje = "Querido ".$_POST["nombre_p"]." su persona de cofianza ".$_POST["nombre"]." le recomienda el sitio www.sitio.ar.com";
$remite = "From: hernandez <hernandez@gmail.com>";

//enviamos mensaje al que nos ha recomendado
if(mail($_POST["email"], $asunto, $mensaje, $remite)){
    print("<p>".$_POST["nombre"].", muchas gracias por su mensaje </p>");
}else{
    print("<p>el mensaje no pudo ser enviado</p>");
}

?>