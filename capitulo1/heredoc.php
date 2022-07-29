<?php 
//podemos guardar toda la sentencia heredoz dentro de una variable, y luego con un echo mostrarla

$codigo = <<<EOT
<p> este texto puede tener dentro "comillas" y el interprete no las detectara como tal </p>
<p> mediante heredoc podemos intercambiar variables como $variable que hubiera dentro del codigo, como veremos a continuacion </p>
<p> esto es ideal cuando necesitemos incluir grandes bloques de codigo html </p>
EOT;
echo $codigo;
?>