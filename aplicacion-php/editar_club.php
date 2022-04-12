<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$nuevo_club = new Club(
    $_POST["id"],
    $_POST["nombreCorto"],
    $_POST["nombre"],
    $_POST["ciudad"],
    $_POST["fecFundacion"],
    $_POST["numSocios"]

);

var_dump($nuevo_club);


$conexion = new Conexion_Club();
$conexion->actualizar($nuevo_club);

header('Location: indexClubs.php');

?> 