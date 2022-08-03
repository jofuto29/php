<?php
    /**php cuentas con mas de 1000 funciones que nos ahorran mucho tiempo y dolor de cabezas. estas estan organizadas por categorias(manejo de caracteres, funciones para fechas/horas...)
    para consultar informacion sobre qualquier fucnion --> http//:www.php.net/nombre_funcion
    
    cunado utilizamos la funcion file los saltos de linea /n eran tomados como caracteres especiales. En el caso en que necesitamos comparar dos contraseñas introducida por el usuario
    no dira que no coinciden pues al guardar guardamos contraseña y comparamos con contraseña/n. Es por ello que la funciones que eliminan estos caracteres especiales son muy utilizadas
    FUNCIONES: trim, ltrim y rtrim/chop, caracteres especiales:
        " "  --> espacio blanco
        \t   --> tabulador horizontal
        \n   --> salto de linea
        \r   --> retorno de carro
        \O   --> byte null
        \xOB --> tabulador vertical
    */

    $cadena = "\tabcd abcd \n";
    echo $cadena."<br>";
    echo "funcion trim: <br>"; //todos los caracteres en toda la cadena
    echo trim($cadena);
    print(trim($cadena));
    echo "funcion ltrim: <br>"; //caracteres de control que hubiera a la izquierda
    echo ltrim($cadena);
    echo "funcion rtrim o chop: <br>"; //caracteres de control que hibiese a la derecha
    echo rtrim($cadena);
    echo chop($cadena);


?>