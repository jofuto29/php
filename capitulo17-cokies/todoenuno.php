
<?php   //si no esta la cokkie creada la creamos
    if(!isset($_COOKIE["variable"])){  //isset devuelve true si encuentra indice en el array, en este caso si no lo encuentra debe de crearlo
        setcookie("variable","porfabor que salga todo bien de ahora en adelante", time() + 60);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEGUNDA LECTURA DE UNA COOKIE</title>
    </head>    
    <body>
        <h1><?php
            if(isset($_COOKIE["variable"])){
                print("la cookie contiene: " . $_COOKIE["variable"]);
            }
            else{
                print("al ser la primera vez que entras, se acaba de crear, recarga la pagina para obserlvar el valor de la cookie");
            }
        
        ?></h1>
    </body>
</html>