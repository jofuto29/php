<?php
    
    echo("su nombre es : " . $_POST["user"] . "<br>");
    echo("su contraseña : " . $_POST["pass"] . "<br>");
    if($_POST["sexo"] == "masculino"){
        echo("hola señor ");
    } 
    elseif($_POST["sexo"] == "femenino") { //si ponemos un igual no estamos comparando, sino que estamos asignando
        echo("hola señora ");
    }
?>