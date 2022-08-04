<?php

//FUNCION PARA CONECTAR CON LA BASE DE DATOS -------------------------------------------------------------------------
function conectar($host,$usuario,$clave,$base){
    if($enlace = @mysqli_connect($host,$usuario,$clave,$base)){
        return $enlace;
    }else{
        return false;
    }
}
/*el @ delante de la funcion que conecta con la base de datos oculta en caso de error el mensaje que produciria el interprete php, aunque oculta los warning no lo errores fatales*/


//FUNCION PARA REALIZAR UNA CONSULTA SQL ------------------------------------------------------------------------------
function consultar($enlace,$consulta){
    if($datos = mysqli_query($enlace,$consulta) and mysqli_num_rows($datos) > 0 ){ //la query debe realizarse y ademas el resultado debe ser con un numero de columnas mallor a 0
        return $datos; //recordemos que en el condicional anterior, primero se evalua mysqli_query y luego la otra, pararia lo mismo con un or, aunque en el caso de no devolver nada la segunda condicion tambien seria flase pues no columnas que contar
    }else{
        return false;
    }
}


//FUNCIONES PARA MOSTRAR EL RESULTADO DE LAS CONSULTAS------------------------------------------------------------------


?>