<?php

    $productos = array(1=> "manzanas","naranajas","peras","platanos");
    echo "<p>numero total de productos:".count($productos)."</p>";

    for($i = 1; $i <= count($productos); $i += 1){
        echo "<p>producto $i: ".$productos[$i]."</p>";
    }
?>