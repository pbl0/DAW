<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");

    // Recoge valor del indice - metodo GET
    $indice = $_GET["indice"];

    // Genera array de libros $tabla
    $tabla = generarTabla();

    // Genera cabecera de tabla
    $cabecera = array_keys($tabla[0]);

    // Elimina el libro segun el $indice indicado
    $tabla = eliminar($tabla, $indice);
    
    // Carga plantilla HTML
    require_once("template/tabla.php");  
?>
