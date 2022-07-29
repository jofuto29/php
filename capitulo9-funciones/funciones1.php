<?php
/**un programa bajo el paradigma basado en funciones quedara reducido a una breve sucesion de llamadas a estas quye recebiran los datos e iran procesadon.
por ejemplo pensemos en un sitio de comercio electronico. tendremos que inventar funciones especificas para cada una de las tareas que se realizan en el sitio desde el registro de usuario, 
cargar nuevos productos a la base de datos, modificacion e ieliminacion de los mismos, eleccion de forma de pago y envio...
el sistema completo se dividirar en varias paginas php y cada una de las paginas tendra que hacer unas tareas especificas. estas tareas, las podemos convertir en funciones
haciendo que cada una de las paginas php funcione como una unidad procesadora.

seria como una caja negra que le pasamos datos por la entrada y sin saber que hace saca el resultado por la salida
EJEMPLO: en la pagina que creamos se espera que el usuario complete su casilla de correo para subscribirse a un boletin electronico. supongamos que
queremos que la pagina realice esta serie de tareas:
    1.
    2.
    3.
    4.
    5.
vemos que es probable que tengamos que repetir algunas tareas un y otra vez en distintas paginas, por ejemplo comporbar que una casiilla de correo sea valida, abrir, eciribir y cerrar un archivo --> esta seran tareas que convertiremos en funciones

*/


?>