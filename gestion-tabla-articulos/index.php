<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");

    // Genera array de libros $tabla
    $tabla = generarTabla();

    // Genera cabecera de tabla
    $cabecera = array_keys($tabla[0]);
    
    // Carga plantilla HTML
    require_once("template/tabla.php");
?>
