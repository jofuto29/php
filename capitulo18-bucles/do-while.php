<?php
    //es similiar a el bucle while lo que la condicion en vez de evaluarse al inicio se evalua al final, de esta manera se garantiza que como minimo se ejecuta una vez el codigo
    $limite = 5;
    do{
        echo $limite++."<br>"; //primero imprime luego ejecuta la operacion
    } while($limite < 9);

?>