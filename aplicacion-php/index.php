<?php

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");
require_once("class/conexion_users_gestion.php");

$conexion = new Conexion_maratoon();
$conexion_user = new Conexion_users_gestion();
$corredores = $conexion->getCorredores();

$cabecera = corredor::cabeceraTabla();

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['mensaje'])){
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}
//var_dump($_SESSION['id']);

if (!is_null($_SESSION['id'])) {
    
    // $rol_id = $conexion_user->getUserRole($_SESSION['id'])[0];
    $rol_id = $_SESSION['rol_id'];
    
    require_once('template/corredores.php');
} else{
    header('Location: login.php');

}


?>