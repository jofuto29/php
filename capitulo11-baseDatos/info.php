<?php
/*
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
11.1 DIFERENCIA ENTRE ARCHIVO DE TEXTO Y BASE DE DATOS --> Principal diferencia es la estructuracion y posterior manipulacion de los datos. Es mucho mas facil trabajar con filas que
    posen varias columnas que en un archivo de texto que como mcuho podemos gastar un separador. Lo mismo ocurre en el caso de buscar un dato completo.

    todas las ubicaciones basadas en la ubicacion fisica de los datos(txt), necesitan saber en que reglon se encuentra el dato, mientras que en una base de datos, contamos con muchas mas
    herraminetas, una de ellas el software gestor al que le podemos hacer consultas.

    Para este cometido, utilizaremos una interfaz o seri de pantallas donde podremos interactuar con la base de datos a partir de herraminetas visuales(phpMyAdmin)


--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
11.2 ESTRUCTURACION FASE DE DATOS
    A) Base de Datos --> fisicamente es tan solo un directorio dentro del servidor creado por MySQL y que tan solo guardar tablas. En conclusion las bases de datos son tan solo 
    conjuntos de tablas almacenadas en un mismo directorio.

    B) Tablas --> como se organiza la base de datos. Por ejemplo en una tienda online podriamos tener una tabla para productos, categorias, usuarios, pedidos, envios, pagos.

    C) Campos --> La estructura de una tabla se define por la cantidad de campos que le agragemos a dicha tablas.(id, nombre, email. mensaje)

    D) Registros --> Cada objeto de esa tabla es un registro. Por ejemplo de la tabla anterior: [1, jose, jose@gmail.com, hola]


-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
11.3 CREADON BASE DE DATOS
    Exiten varias manera de crear la base de datos, pero la mas habitual es crearla de manera visual. El software mas utilizado para ello es phpMyAdmin que suele venir instalado
    en los hosting que poseen MYSQL.
    En el caso de hacerlo local mediante XAMPP(serv pruebas), arrancamos MYsql dandole star y luego le damos a admin para que habra phpMyAdmin en el navegador.

    [
        antes de continuar tenemos que dejar claro dos puntos relacionados con el tema de la seguridad.
        
        1. qualquier persona que conozca o adivine nuestra direccion ip puede navegar por las paginas que sirve nuestro servidor web local incluyendo phpMyAdmin, pudiendo borrar
        toda la base de datos. Esto se resuelve especificando un usuario y una contraseña para ingresar en el servidor local con el navegador.

        para ello vamos a phpMyAdmin, cuentas de usuario y seleccionamos nombre de usuario root, servidor localhost. --> editar privilegios y le añadimos una contraseña a ese usuario.
        luego oviamente generara un error al navegar de nuevo por esta pagina pues, la contraseña no coincide la acabamos de cambiar.
        para solucionar el problema iremos al archivo de congfiguracion phpMyAdmin(config.inc.php) y modificaremos:
            $cfg['Servers'][$i]['user'] = 'root'; esta linea ya se llama root, era el nombre de usuario
            $cfg['Servers'][$i]['password'] = 'root'; la contraseña que puse en el servidor
        
        Aunque por lo general en un hosting real esta tarea no la realizaremos nosotros, si no el administrador del sitio donde alojemos.
    ]


    continuando con la creaciond de base de datos, podemos hacerlo de varias manera, para empezar lo haremos de la manera mas simple posible. mediante la herramineta phpMyAdmin:
            1.no soposicionamos al lado izquierdo donde veremos base de datos que vienen creadas por defecto con phpMyAdmin [information_schema, mysql, perfomance_schema, phpmyadmin, test],
            son muy importante para el buen funcionamineto de todos los sitemas. De hecho en un hosting real ni siquierda tendremos acceso a ellas, asi que es muy importante no modificarlas.
            Para crea una nueva base de datos solo tendremos que pulsar en nueva arriba de todas estas base de datos que hemos mecionado: colocamos un nombre y elegimos una codificacion
            utf8-spanish_ci inclye ñ... 
            pulsamos en crear y creara el directorio en el servidor, ya tendremos la base de datos creada

            2. el nombre de la base de datos recien creada aparecera a la izquierda junto con la s demas que teniamos por defecto.

            3. crearemos una tabla: seleccionando la base de datos creada, bajo aparecera nueva, le clicamos para crear una nueva tabla
                nombre tabla: ,.... numero de campos:4 
                luego le daremos nombre a esos campos y el timpo de datos que alamacenara, int para enteros, varchar para texto cortos, text para texto largos.. ahora a continuacion
                hablaremos de los distintos tipos de datos que le podemos dar.
                la tercera columna almacena el numero maximo de caracteres que ese campo puede alamacenar(si text no poner nada)
                la columna nulo indica si se puede agregar un nuevo registro sin incluir nada en se campo.
                indice, primary para el id.

            4. agragar registro --> insertar y rellenamos con datos. el campo id no sera necesario incluir ningun valor puesto que el motor sql lo hace automaticamnete de 1 en 1
            5. si puldamos en examinar veremos los registros que se encuentran en esa tabla
            6.si le damos al lapiz podremos modificar un registros y si le damos a al x lo eliminaremos

            7.copia de seguridad --> mediante exportar podemos exportar la tabla con todos los registgros con formato .sql y luego la podriamos importar con import
   
            
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
11.4 TIPOS DE DATOS MAS USADOS

    A)ENTEROS
        TINYINT --> 1BYTE
        SMALLINT --> 2BYTE
        MEDIUMINT --> 3BYTE
        INT/INTEGER --> 4BYTE
        BIGINT --> 5BYTE 

        VALORES SIN SIGNO --> UNSIGNED duplicamos el rango si quitamos los valores negativos
                longitud --> numero de caracteres que podra guardarse, si para la edad elegimos 3, sera lo correcto, y con un tynint unsigned, podremos llegar hasta 255
                
    B)DECIMALES
        FLOAT --> simple precision, cantidad decimales entre 0 y 24
        DOUBLE --> doble precision, cantidad decimales entre 25 y 53
        DECIMAL --> ideal para guardar valores monetarios, maxima extitud es decir sin redondeos
            ej FLOAT(6,2) --> numero de decimales 2

    C)ALFANUMERICOS
        CHAR --> permite almacenar hasta 255. pero no es eficiente si la cantidad no es fija pues reserva esos huecos en la memoria y si no se gastan se desperdician. sirve par aocsas 
            fijas como si queremos guardar el sexo de una sersona, solo reservamos un caracter
        
        VARCHAR --> al contrario que char, solo ocupa lo que el dato ocupe, y sirve par alo contrario, guardad datos que se desconoce su longitud. En versiones pasadas permitia solo
            guardar 255, pero en reciente se ha ampliado hasta 65535 caracteres.

        BINARY/VARBINARY --> igual que char y varchar pero guarda bytes en vez de caracteres.

        TEXT --> se utilizaba para texto largos, sin embargo con la ampliacion de varchar, se deja de utilizar este pues el otro permite ser indexado.

        TYNYTEXT, MEDIUMTEXT, LONGTEXT --> realmente solo tienen utiliad el ultimo los demas pueden ser sustituido por varchar

        BLOB --> campo que guarda informacion en formato binario utilizado para guardar imagnes o archivo comprimidos. Aqune en general para la imagenes no se utiliza este pues es mas
                 eficiente utilizar un varchar que guarde una URL al sitio donde se encuentra la imagen., pues las imagenes pesan mucho y relentizan la base de datos.
            
        ENUM --> nos permite establecer una lista de valores qu epodra tener este campo, no se podra introducir un valor disitnto que no este en la lista. Estos valores deben estar entre 
                comillas simplres y separados con comas unos de otros en el momento de la declaracion. (hasta 65535 distintos)

        SET --> esta palabra significa conjunto y funciona muy parecido a ENUM sin embargo el maximo son 64 opciones disintas. Ademas podemos elegir variaos valores para un mismo registro
                en este campo o dejarlo totalmente vacio.
                Para declarar los distinto tipos de valores lo hacemos que igual que enum, y para asignar mas de un valor pulsamos control mientras hacemos click en los diferentes valores posibles

    D)FECHAS HORAS
        DATE --> AAAA:MM:DD
        DATETIME --> AAAA:MM:DD HH:MM:SS
        TIME --> HH:MM:SS
        TIMESTAMP --> CONTIENE TODOS LOS FORMATOS
                    ademas tiene un peculiaridad, podemos definir que su valor se mantega actualizado cada vez que se inserte o modifique el registro. 
                    campo: momento, tipo: TIMESTAMPT, predeterminado: CURRENT_TIMESTAMPT
        YEAR --> alamcena el año con 2 o cuatro digitos
    
    Los tipos de datos uqe acabamos de ver poseen atributos caracteristicos como en el caso de current_timestampo. 

    E)ATRIBUTOS
        null o not null --> si not null no podremos agregar un registro si no completamos ese campo
        default --> valor predeterminado
        BINARY --> ordenamineto binario, si lo deseamos, ordena de mayuculas a miniculas, terndremos que ir al campo atributo y poner binary
        indices--> objetivo mantener ordenador los registros por aquellos campos que sean frecuentemente utilizados para realizar busquedas. Es decir no es mas que una tabla paralela
                    que guarda los mismo datos pero en lugar de ordenarlos por el id los ordena por el campo que le especifiquemos.
                    por ejemplo si quisieramos bucar una pelicula, estartia bien asignar un indice al campo titulo
                    para indica que queremos indice, vamos a la partado indice y seleccionamos index, asi se crea una tabla paralela que ordenara por ese campo que le hemos seleccinado

                    ademas aparte de indice hay dos opciones mas:
                    1. PRIMARY --> para la calve primaria. ademas se le puede decir que autoincremente con dichoa tirbuto para no preocuparnos de darle nosotros valor. ademas
                    la clave primaria puede estar formada por dos o mas campos sinedo una clave compuesta, en los demas campos tambien deberiamos poner en index primary

                    2. UNIQUE --> obligamos a que el valor no pueda repetirse

                    3. FULLTEXT --> Si en un campo de tipo text, creamos un indice de tipo fulltext podremos buscar palabras especificas dentro de ese campo, el motor ira palabra
                    por palabra comparando si hay o no.

*/
?>