<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$expresion = $_GET['expresion'];

$conexion = new Conexion_club();
$clubs = $conexion->buscar($expresion);

$cabecera = club::cabeceraTabla();
require_once('template/clubs/clubs.php');
?> 