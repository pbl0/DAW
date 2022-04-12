<?php

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$corredor_editar = new Corredor (

    $_POST['id'],
    $_POST["nombre"],
    $_POST["apellidos"],
    $_POST["ciudad"],
    $_POST["fechaNacimiento"],
    $_POST["sexo"],
    $_POST["email"],
    $_POST["dni"],
    $_POST["edad"],
    $_POST["id_categoria"],
    $_POST["id_club"]

);

$corredor_editar->edad_actual();

$conexion = new Conexion_maratoon();
$conexion->actualizar($corredor_editar);

header('Location: index.php');

?> 
