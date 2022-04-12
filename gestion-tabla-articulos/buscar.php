<?php 
// Carga funciones
require_once("lib/funcionesTabla.php");

// Recoge valor de busqueda
$busqueda = $_GET["busqueda"];

// Genera array de libros $tabla
$tabla = generarTabla();

// Genera cabecera de tabla
$cabecera = array_keys($tabla[0]);

// Realizamos la busqueda
$tabla = filtrar($tabla, $busqueda);

// Carga plantilla HTML
require_once("template/tabla.php");
?>