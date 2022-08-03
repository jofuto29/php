<?php
//para este tipo de tareas disponemos de las funciones: SUBSTR, STRPOS, STRSTR, PREG_MATCH, FILTER_VAR

$texto = "partiendo cadenas en este curso de php";
$dominio = "www.cogejeremosesto.es";

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//1. SUBSTR, debemos indicar en los parametros: la cadena, a partir de que caracter cojemos y cuantos caracteres incluira
    echo substr($texto,10)."<br>"; //cojera desde la c de cadenas hasta el final
    echo substr($texto,10,7)."<br>"; //cojera solo la palabra cadena

    //casos especiales de esta funcion:
    echo substr($texto,-6,5)."<br>"; //si primer indice es negativo cuenta la cadena desde el final 6 posiciones y desde ahi coge 5 caracteres
    echo substr($dominio,4,-3)."<br>"; //situamos el punto de inicio en 4 y el punto final a 3 caractes de final, es decir cogemos algo indeterminado pero siempre si cojer el www. ni el .es


//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   
//2 STRPOS, sirve para buscar un caracter en concreto y nos devolvera la posicion en la que se encuentra dicho caracter
    //el truco para utiizar bien esta funcion es validar mediante un if si el resultado de esta funcion fue distinto a 0 false o vacio. para esta comparacion un poco mas compleja
    //sera necesario utilizar el comparador de indentidad === que evalua si es el mismo tipo ademas de si es el mismo valor.
    //parametros: $cadena, $caracter, inicio
    
    $posicion = strpos($texto, "p");
    if($posicion === false){ //si no ponemos los tres iguales, la pe la encontramos en la posicon 0 del texto, entonces == 0 se evalua a false, pero si ponemos === debe ser un boleano
        echo "caracter no encontrado <br>";
    }else{
        echo "caracter encontrado en la posicion: $posicion <br>";
    }

    //esta fucion es muy practica para aquellos casos que queremos verificar que exita un caracter especial dentro de una cadane (@en los correos) o para justo lo contrario, verificar
    //que en esa cadena no exitan caracteres no permitidos

    function permitir_letras($cadena){
        $letras_permitidas= "abcdefghijklmñopqrstuvwxyzABCDEFGHIJKLMÑOPQRSTUVWXYZ";
        for($i = 0; $i < strlen($cadena); $i++ ){
            if(strpos($letras_permitidas, substr($cadena,$i,1)) === false){
                return false;
            }
        }
        return true;
    }

    $cadena_no = "123abcd123";
    $cadena_si = "abcdedfasAASDA";

    if(permitir_letras($cadena_si)){
        echo "la cadena $cadena_si es permitida <br>";
    }else{
        echo "cadena no permitida <br>";
    }

    if(permitir_letras($cadena_no)){
        echo "cadena permitida <br>";
    }else{
        echo "la cadena $cadena_no no permitida <br>";
    }


//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//3 STRSTR, devuelve como resultado toda la cadena de texto hasta su final a partir del caracter especificado
    $email = " jofuertres29@gmail.com";
    $caracter = "@";

    $dominio = strstr($email,$caracter);
    print($dominio."<br>");
    //para invertir el sentido ponemos a true el terce parametro, por defecto esta en false
    $dominio = strstr($email,$caracter,true);
    print($dominio."<br>");


//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//4 PREG_MATCH, es parecido a la funcion strpos, con ella podemos hacer la validaciones, pero para validaciones mas complejas podemos tambien utilizar preg_match
//cabe destacar que strpos es mas rapido que preg_match, por lo tanto para ahcer busquedas que puedan hacerse con strpos, utilizamos strpos
    $mensaje = "el video es muy corto, tONto"; 
    $prohibido = "tonto";

    if(preg_match(" /\b$prohibido\b/i", $mensaje )){ //debemos poner entre barras las palabras a buscar, el /i es para indica que ignore las mayusuclas y minusculas
        echo "mensaje no es valido <br>";             // los \b sirven para que la coincidencia sea de la palabra completa, no devuelva true si buscamos mar y encuentra amar
    };

    //de igual manera podemos hacerlo para un rango de numeros:
    //devolvera true cuando no se cumplan los rangos, true cuando ^disitnto 1-9 o el de abajo a-z
    $numero ="5asa";
    if(preg_match(" /[^0-9]/", $numero)){
        echo "mesaje rango correcto $numero<br>";
    }

    $letras ="abzs1";
    if(preg_match(" /[^a-z]/", $letras)){ 
        echo "mesaje rango correcto $letras<br>";
    }


//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//5 FILTER_VAR un funcion que complementa muy bien a esta es filter_var(), evitanto el uso de complejas expresiones regulares
    $correo = "pepe@unespacio blanco.com";

    if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
        echo "<p>casilla correcta</p>";

    }else{
        echo "<p>casilla incorrecta</p>";
    }
    //consultar en manual php FILTER_VAR
?>