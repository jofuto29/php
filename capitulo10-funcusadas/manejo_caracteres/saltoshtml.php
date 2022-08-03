<?php
//FUNCION NL2BR
//los saltos que un usuario pone en  un formulario, la peticion http, coloca caracteres especiales /n, que solo se verian reflejados en el codigo pero al procesaro el codigo html
//estos saltos no se verian en el navegador puesto que /n no significa nada, un salto de lina es la etiqueta <br>

$comentario = "esto es un comentario. \n sigo escribiendo depues de apretar un enter. \n termino el comentario \n";
//si esto lo imprimos talcual, se vera reflejado en el codigo fuente de la pagina pero no en el navegador como nos gustaria
print($comentario."<br><br>");
print(nl2br($comentario,true)); //valor false coloca <br>, en true coloca <br /> como en XHTML

?>