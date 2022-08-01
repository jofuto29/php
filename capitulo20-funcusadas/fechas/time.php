<?php
//------------------------TIME()--------------------------------------------------------
//el valor timespam es la cantidad de segundos trancurridos desde el enero de 1970.Es un numero muy practico ya que al ser un numero entero podemos hacer muchas operaciones sin dolores de cabezas
//la funcion TIME() no devuelve el numero de segundo trancurridos hasta el momento exacto, con respecto a la hora del servidor donde se ejecuta
    $time = time();
    echo $time."<br>";

    //podriamos mostrar en cuantos segundo vencera un temporizador
    $doshoras = 7200;//en segundos
    $doshoras += $time;
    echo "temporizador de dos horas vencera en $doshoras <br>";


//-----------------------------------------------------GETDATE()--------------------------------------------------------------
//covirtamos este valor timespam en valores mas humanos: para ello utilizaremos la funcion GETDATE() que tranforma el time spam en una matriz donde en cada celda guarda un valor:

    $detalle= getdate($time);
    print("<p>hora :".$detalle["hours"]." ");
    print("minutos :".$detalle["minutes"]." ");
    print("segundos :".$detalle["seconds"]." </p>");

    print("<p>dia del mes:".$detalle["mday"]." ");
    print("mes:".$detalle["mon"]." ");
    print("año:".$detalle["year"]." </p>");

    print("<p>dia de la semana:".$detalle["wday"]."</p>");
    print("<p>dias desde principo de año: ".$detalle["yday"]."</p>");
    print("<p>en ingles dia de la semana:".$detalle["weekday"]."</p>");
    print("<p>en ingles mes :".$detalle["month"]."</p>");


//----------------------------------------------------DATE()--------------------------------------------------------------
//funcion de uso similar a getdate() pero mas breve, la diferencia esque esta funcion no genera una matriz, sino una cadena de texto formateada que nos permite especificar facimente 
//como motrar las fechas:

    print(date("D-M-Y")."<br>");
    print(date("d-m-y")."<br>");
    print("<p>hoy es: ".date('d')." del mes: ".date('m')." del año : ".date('y')."</p>");
    //podemos pasarle como segundo argumento un time spam y sera ese time spam el que formatee en la forma que especifiquemos:
    print(date("D-M-Y:H-i-s",1659389989)."<br>");


//--------------------------------------------------MKTIME()----------------------------------------------------------------------------------------------
//esta funcion hace lo contrario toma una fecha y hora dadas y devuelve el valor de timespam
//(horas,minutos,segundo,mes,dia,año)
$navidad = mktime(23,59,59,12,24,2022);
$navidad = $navidad - $time;
print("quedan exactamente $navidad segundos para que llegue navidad <br>");



//-------------------------------------------------CHECKDATE()-----------------------------------------------------------------------------------------------------------------
//en muchas ocasiones necesitaremos validar si el usuario ha introducido correctamente una fecha para ello podemos utilizar la funcion checkdate:

$fecha = checkdate(12,32,2022);
if($fecha){
    echo "fecha correcta <br>";
}
else{
    echo "fecha incorrecta <br>";
}

//pagina 255 --> ZONAS HORAIAS Y COMO CAMBIARLAS, es con respecto al servidor y a php.ini
?>