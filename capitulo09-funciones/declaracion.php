<?php
    function listar_matriz($matriz){
        $codigo = '<ul class="puntitos">';
        foreach($matriz as $valor){
            $codigo = $codigo."<li>".$valor."</li>";
        }
        $codigo = $codigo."</ul>";

        return $codigo;
    }
    //ahora para llamar a esta funcion desde otro archivo php tendremos que incluirla dentro de el mediante: include("declaracion.php"); oviamente dentro la ruta

    function cuadrado($numero){
        return $numero * $numero;
    }

    //funcion con 2 parametros
    function listar($ruta, $titulo){
        $filas = file($ruta);
        $codigo = '<h1>'.$titulo.'</h1><ul class = "puntitos">';

        foreach($filas as $fila){
            $codigo = $codigo."<li>".$fila."</li>";
        }
        return $codigo."</ul>";
    }

    function augmento($precio, $porcentaje){
        return  ($precio + ($precio * $porcentaje/100));
    }

    //funciones sin parametros
    function contarVisitas(){
        $archivo = fopen("contadorVisitas.txt","a+");
        $numero = fgets($archivo, 6);
        fclose($archivo);

        echo $numero."<br>";

        if($numero == ""){ //en el caso de que creemos un nuevo archivo.
            $numero = 1;
        }else{
            $numero += 1;
        }

        echo "<p> el numero de visitas es: ".$numero."</p>";

        $archivo = fopen("contadorVisitas.txt","w");
        fwrite($archivo, $numero); //como es apertura w, sustituira a lo que teniamos guardado, pero lo hemos leido ante y lo guardamos actualizado
        fclose($archivo);
        //return $numero; podemos devolver algo pero no sera necesario
    }


    // es conveniente no hacer echos y prints dentro de las funciones pues una vez echa esto no podremos modificar el texto que se creo en la fucnion. siempre seta mejor utilizar 
    // return al final de la funcion, y desde se llamo a dicha funcion validar si lo que nos devolvio queremos mostrarlo todo, algo o nada en caso de producirse un error

    function modulo($valor,$mod){
        if(($valor % $mod)==0){ //sera par
            return true;
        }else{
            return false;
        }
    }

    //ahora utilizaremos esa funcion declarada anteriormente en esta otra fucion:
    function tablear($filas){
        $codigo = "<table>";

        for($i = 1; $i<$filas; $i++){
            if(modulo($i,2)==true){ //par
                $codigo .= '<tr><td class = "par"> Esta es la fila par '.$i.'</td></tr>';
            } else {
                $codigo .= '<tr><td class = "impar"> Esta es la fila impar '.$i.'</td></tr>';
            }
        }
        
        return $codigo."</table>";
    
    }



?>