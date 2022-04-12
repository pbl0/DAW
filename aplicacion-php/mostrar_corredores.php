<?php

require_once("class/club.php");
require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$conexion = new Conexion_club();

$id = $_GET["id"];

$club = $conexion->getClub($id);

$corredores = $conexion->mostrarCorredores($id);
$cabecera = corredor::cabeceraTabla();

require_once('template/clubs/mostrarCorredores.php');
?> 