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

function generarMenuSeleccion($datos,$name,$label){
    $codigo = "<label>".$label."</label>"."\n";
    $codigo = $codigo.'<select name="'.$name.'">'."\n";

    while($fila = mysqli_fetch_array($datos)){
        $codigo = $codigo.'<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>'."\n"; //el el libro recomienda utilizar utf8_encode() para los nombre pero si lo hago de esta manera sucede lo contrario a lo que deberia suceder
    }
    $codigo = $codigo."</select>"."\n";
    return $codigo;
}



function tablear($datos){
    $codigo = '<table border="1" cellpadding="3">';
    while($fila = @mysqli_fetch_array($datos)){
        $codigo .= '<tr>';
        $codigo .= '<td>'.$fila["id"].'</td>';
        $codigo .= '<td>'.$fila["nombre"].'</td>';
        $codigo .= '<td>'.$fila["apellido"].'</td>';
        $codigo .= '<td>'.$fila["edad"].'</td>';
        $codigo .= '<td>'.$fila["pais"].'</td>';
        $codigo .= '<td>'.$fila["especialidad"].'</td>';
        
        //la modificamos en el capitulo 13, añadiendo dos columnas mas por cada registro, uno para modificar y otro para eliminar
        $codigo .= '<td><a href="modificar.php?codigo='.$fila["id"].'"> Modificar </a></td>';
        $codigo .= '<td><a href="borrar.php?codigo='.$fila["id"].'">  Eliminar  </a></td>';
        $codigo .= '</tr>';
    }
    $codigo .= '</table>';
    return $codigo;
}

/*se modifica esta funcion para en el back end el administrador pueda borrar o modificar los usuarios de la tabla empleados, esto oviamente se puede extapolar a otra tablas y otro tipo
de atributos.
se añade una etiqueta a href que enviara al servidor mediante el metodo get el id del usuario que queremos modificar o eliminar dado que lo estamos añadiendo el id en el propio enlace 
que estamos generando, par ahacer esto tenemos que añadir el get a medida que se va contruyendo en la tabla como vemos en la funcion anterior. --> modificar.php?codigo='.$fila["id"].'"
*/


function crearRadios($datos,$leyenda,$name){
    $codigo = '<fieldset><legend>'.$leyenda.'</legend>'."\n";

    while($fila = @mysqli_fetch_array($datos)){
        $codigo .= '<label>'.$fila["nombre"];
        $codigo .= '<input type="radio" name="'.$name.'" id="dato'.$fila["id"].'">'."\n";
        $codigo .= '</label><br>'."\n";
    }
    return $codigo.'</fieldset>'."\n";
}



function verificacion($datos,$leyenda){
    $codigo = '<fieldset><legend>'.$leyenda.'</legend>'."\n";

    while($fila = @mysqli_fetch_array($datos)){

        $codigo .= '<label>'.$fila["nombre"];
        $codigo .= '<input type="checkbox" name="'.$fila["id"].'" id="dato'.$fila["id"].'">'."\n";
        $codigo .= '</label><br>'."\n";
    }
    return $codigo.'</fieldset>'."\n";
}




?>