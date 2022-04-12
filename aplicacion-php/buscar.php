<?php

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$expresion = $_GET['expresion'];

$conexion = new Conexion_maratoon();
$corredores = $conexion->buscarCorredores($expresion);

$cabecera = corredor::cabeceraTabla();
require_once('template/corredores.php');
?> 


