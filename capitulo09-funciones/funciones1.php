<?php
/**un programa bajo el paradigma basado en funciones quedara reducido a una breve sucesion de llamadas a estas quye recebiran los datos e iran procesadon.
por ejemplo pensemos en un sitio de comercio electronico. tendremos que inventar funciones especificas para cada una de las tareas que se realizan en el sitio desde el registro de usuario, 
cargar nuevos productos a la base de datos, modificacion e ieliminacion de los mismos, eleccion de forma de pago y envio...
el sistema completo se dividirar en varias paginas php y cada una de las paginas tendra que hacer unas tareas especificas. estas tareas, las podemos convertir en funciones
haciendo que cada una de las paginas php funcione como una unidad procesadora.

seria como una caja negra que le pasamos datos por la entrada y sin saber que hace saca el resultado por la salida
EJEMPLO: en la pagina que creamos se espera que el usuario complete su casilla de correo para subscribirse a un boletin electronico. supongamos que
queremos que la pagina realice esta serie de tareas:

    1. verifica que hayan llegado los datos esperados y que estos no esten vacios
    2. comprueba que el correo sea valido
    3. abre un archivo en modo escritura para guardar los datos recibidos
    4. añade los datos y cierra el archivo
    5. devuelve mensaje de acierto o error al punto donde se llamo a la funcion

vemos que es probable que tengamos que repetir algunas tareas un y otra vez en distintas paginas, por ejemplo comporbar que una casiilla de correo sea valida, abrir, eciribir
 y cerrar un archivo --> esta seran tareas que convertiremos en funciones

*/

    if(isset($_POST["correo"]) and $_POST["correo"] <> ""){ //miramos que exita esa posicion y que no este vacia
        $correo = $_POST["correo"];

        if(comprobar_casilla($correo)){ //validamos la casilla
            if(escribirArchivo($correo)){
                echo "<p>el archivo se guardo correctamente </p>";
            } else{
                echo "<p>se produjo un error en la escritura </p>";
            }
        } else {
            echo "<p>no se pudo validar la casilla correctamente </p>";
        }
    } else {
        echo "<p>los datos necesarios no llegaron correctamente </p>";
    }

    //ahora bien, para que este codigo funcione, seria necesario definir las funciones comprobar_casilla y escribirarchivo.


?>