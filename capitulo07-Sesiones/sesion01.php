<?php
/*la gran diferencia con respecto a la cookies, es que la sessiones guardan toda la informacion en el servidor y por tanto no dependen de que el navegadro de usuario borre una cokkie.
dinamica de funciionamineto: se crean dos cosas:
    1. archivo de tecto donde se guardan todos los datos variables cuyo nombre esta formado por una parte fija "sess"_"numero aletaorios"
    2. en el lado de usuario se crea un codigo que se guarda en una cookie una variable con nombre SID = "numero aleatorio" igual que el anterior obviamente

las sesiones no se activan por si solas, sino que se activan ejecutando una funcion php
    1. por ejemplo en un catalogo de ecomerce por solo entrar se suele crear automaticamente una sesion para que se registres los productyos que el usuario visita. el famoso carrito de compras
    2. en otros sitios no se incia hasta que el usuario rellene un formulario consu nombre y contraseña, es decir hasta que se identifique.

podriamos pensar que la sesiones son un paso mas alla que las cookies aunque esto depenede de la forma en la que sean programadas, ya que la forma mas comun de utilizar las sesiones
es mediante cookies y se pierde potencia ya que depende de la activacion de las cookies por parte del usuario
lo verdaderamente importante es mantener como sea el identificador de sesion a lo largo de la navegacion entre paginas.

por cada sesion se crea un archivo que se guarda en el servidor cuyo directorio es especificado mediante la variable session_save_path del archivo php.ini, en este caso en tmp se crean
archivos de tecto especificando la variable longitud y nombre y valor, y en el caso del usuario una cookie que alamcena el sid

*/ 

//procedemos a iniciar una sesion
session_start(); //esta funcion debe incluirse en todos los archivos, la primera vez que se ejecuta crea una sesion, y la demas mantiene la sesion ya creada, ademas debe ser 
//lo primero que se ejecuta antes de qualquier print o echo ya que de igual manera debe ir en el head de la peticon http, pues crea una cookie en el navegador del usuario con nombre PHPSESSID

$id = session_id();
echo "el identificador de esta sesion es: $id <br>";

//las variables de sesion deben guardarse enn el array &_session. esta estaran disponibles en qualquier pagina que mantenga la sesion activa
if($_SESSION["nombre"] == ""){ 
    $_SESSION["nombre"] = "pepe";
}
/*estos campos perfectamente podrian venir a traves de un formularios con los metodos post o get y almacenarlos en este array*/

?>
<!DOCTYPE html>
<html land="es">
    <?php echo "hola: ". $_SESSION["nombre"]; ?>
    <p><a href="sesion011.php">siguiente pagina</p>
</html>