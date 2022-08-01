<?php
//----------------------------------------------------------FUNCION MAIL() --------------------------------------------------------------------------------------------
/**exite la posibilidad de que en vez de almacenar la informacion la queramos enviar por correo, por ejemplo para que el usuario reciba un aviso automatizado... php nos permite
enviar correos electronicos mediante la funcion mail de texto plano o de texto html como veremos a continuancion:
es necesario que el hosting tengo tambien un servidor de correos habilitado, por lo general lo deben de tener. en cuanto al servidor local que utilizamos para pruebas utilizaremos mercuty

1.1 ENVIO BASICO
este envio se realiza automaticamente cuando ejecutemos la funcion mail, en ese momento el software interprete de php solicita al servidor de correos especificado en php.ini que envie el correo
son necesarios 3 parametros:
    1. destino
    2. asunto
    3. cuerpo
    4. cabeceras SMTP(opcional)

ademas esta funcion devuelve un valor booleano a true si pudo enviar el correo y a false en caso contraio
pordriamos pensar que fuese el usuario quien se encarga de envair estas tres cosas obligatorias pero esto supondria un PELIGRO a nuestra pagina web dado que el receptor de esos mensajes
es nuestro servidor de correos.
para evitar estos problemas podemos hacer 2 cosas:
    1. formulario donde el usuario nos hace una consulta. en este caso pondremos como direccion destino de foma fija y quien escriba nunca podra cambiarla
    2. formulario para recomendar nuestro sitio. donde el usuario solo puede poner la direccion pero el texto y asunto lo escribimos nosotros.

CASOS PRACTICOS:
*/

$destino = "llocalhost9@gmail.com";
if(mail($destino, $_POST["asunto"], $_POST["mensaje"])){
    print("<p> muchas gracias por su mensaje </p>");
}else{
    print("<p>el mensaje no pudo ser enviado</p>");
}



?>