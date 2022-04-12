<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$criterio = $_GET['criterio'];

$conexion = new Conexion_club();
$clubs = $conexion->ordenar($criterio);

$cabecera = club::cabeceraTabla();
require_once('template/clubs/clubs.php');
?> 

