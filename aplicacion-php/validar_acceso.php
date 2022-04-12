<?php

require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users_gestion.php");

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$conexion = new Conexion_users_gestion();
if(!isset($_SESSION)){
    session_start();
}
unset($_SESSION['errores']);

$errores = $conexion->acceso($email, $pass);

if (!empty($errores)){
    
    $_SESSION['errores'] = $errores;
    require_once('login.php');
} else {
    
    $usuario = $conexion->getUsuario_email($email);
    $_SESSION["id"] = $usuario->getId();
    $_SESSION['mensaje'] = "Has iniciado sesión correctamente.";
    $_SESSION['rol_id'] = $conexion->getUserRole($_SESSION['id'])[0];
    // require_once('index.php');
    header('Location: index.php');
}


?>