<?php
    
    echo("DATOS DE CONSULTA" . "<br>");
    //COMPROBACION DE QUE TODOS LOS DATOS LLEGARON Y NO ESTAN VACIOS
    if( isset( $_POST["user"],$_POST["pass"],$_POST["edad"],$_POST["sexo"],$_POST["dia"],$_POST["contacto"]) and 
        $_POST["user"] and $_POST["edad"] and $_POST["contacto"] and $_POST["pass"] and $_POST["dia"] != "")
    {
        if($_POST["edad"] <= 17 ) {
            print("debe ser mallor de 18 años para poder realizar la consulta, porfavor consulte con su tutor legal" . "<br>");
        }
        else{
            print("nombre del paciente:  " . $_POST["user"] . "<br>");
            print("contraseña:  " . $_POST["pass"] . "<br>");
            print("edad paciente:  " . $_POST["edad"] . "<br>");
            print("sexo del paciente:  " . $_POST["sexo"] . "<br>");
            switch($_POST["dia"]){
                case "lunes": $texto = "dia de consulta lunes"; break;
                case "martes": $texto = "dia de consulta martes"; break;
                case "miercoles": $texto = "dia de consulta miercoles"; break;
                case "jueves": $texto = "dia de consulta jueves"; break;
                case "viernes": $texto = "dia de consulta viernes"; break;
                case "sabado": $texto = "el sabado no se puede realizar una consulta"; break;
                case "domingo": $texto = "el domingo es el dia del señor"; break;
                default: $texto = "porfabor introduce un dia correctamente"; break;
            }
            print($texto);
        }

    }
    else{
        print("los datos del formulario no se llenaron correctamente, porfavor completelos de nuevo en:");
        print("<p> <a href=formulario2.html> formulario </a></p>");
    }
?>