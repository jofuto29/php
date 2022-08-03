<?php
/*
podemos escribir codigo sql en phpmyadmin en la ventana sql, asi pues, si escribirmos lo siguiente crearemos la tabla empleados
CREATE TABLE empleados(
    id TINYINT( 3 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR( 40 ) NOT NULL ,
    apellido VARCHAR( 40 ) NOT NULL ,
    edad TINYINT( 2 ) NOT NULL ,
    pais VARCHAR( 40 ) NOT NULL ,
    especialidad VARCHAR( 30 ) NOT NULL
) ENGINE = MYISAM


insertar datos en esa table mediante codigo SQL
INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `pais`, `especialidad`) VALUES (4, 'Alberto', 'Maza', '45', 'Mexico', 'Matemáticas');
INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `pais`, `especialidad`) VALUES (5, 'Luis', 'Puente', '43', 'Argentina', 'Sistemas');
INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `pais`, `especialidad`) VALUES (6, 'Claudio', 'Lopez', '41', 'España', 'Medicina');
INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `pais`, `especialidad`) VALUES (7, 'Mario', 'Juarez', '51', 'México', 'Sistemas');
INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `edad`, `pais`, `especialidad`) VALUES (8, 'Alan', 'Flores', '25', 'Peru', 'Sistemas');
*/
?>