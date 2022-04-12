<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$conexion = new Conexion_club();
$clubs = $conexion->getClubs();
$cabecera = club::cabeceraTabla();

require_once('template/clubs/clubs.php');
?> 
