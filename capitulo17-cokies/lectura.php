<!DOCTYPE html>
<html>
    <head>
        <title>PRIMARAS LECTURA DE UNA COOKIE</title>
    </head>    
    <body>
        <h1><?php
            if(isset($_COOKIE["cookie"])){
                print("la cookie contiene: " . $_COOKIE["cookie"]);
            }
            else{
                print("no existe la cookie solicitada");
            }
        
        ?></h1>
    </body>
</html>