<?php

    /*
    es sumamente util crear una biblioteca con funciones y otra con datos que incluiremos en los archivos que vallamos creado, para no estar escribirnedo el mismo codigo diferentes veces
    deberemos dividir el trabajo en diferentes tareas:
        1. funcion que intene establecer conecxion con la base de datos
        2. funcion que ejecuta consulta y devuelve los datos
        3. varias funciones, cada una especializada en mostrar los datos recibidos con diferentes etiquetas html

    el archivo que acabamos de definir datos.php, contiene todas las variables relativas a la conecxion con la base de datos, ya que su valor suele cambiar de un hosting a otro. Si lo 
    hacemos de esta manera, cuando probemos nuestro sistema en un hosting diferente no tendremos que ir cambiando una a una la concexion con sql en cada pagina.
    Luego en las paginas que se van a conectar haremos un include de datos.php y de ahi sacaremos la informacion relativa a la concexion.
    
    */

    $host = "localhost";
    $usuario = "root";
    $clave = "contraseña";
    $base = "cursos";


?>