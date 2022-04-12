<?php
// Carga funciones
require_once("lib/funcionesTabla.php");

// Recoge valor de criterio - metodo GET
$campo = $_GET["criterio"];

// Genera array de libros $tabla
$tabla = generarTabla();

// Genera cabecera de tabla
$cabecera = array_keys($tabla[0]);

// Ordenar array con función ordenar
$tabla = ordenar($tabla, $campo);

// Carga plantilla HTML
require_once("template/tabla.php");
?>