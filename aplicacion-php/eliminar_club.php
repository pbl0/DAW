<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

# Realizo la conexión
$clubs = new Conexion_club();

# Obtengo id del corredor que se desea editar
$id = $_GET['id'];

$clubs->eliminar($id);

header('Location: indexClubs.php');

?>