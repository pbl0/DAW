<?php

require_once("class/alumno.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

# Realizo la conexión
$conexion = new Conexion_maratoon();

# Obtengo id del alumno que se desea eliminar
$id = $_GET['indice'];

# Elimino el alumno 
$conexion->eliminar($id);

header('Location: index.php');

?> 


