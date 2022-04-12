<?php 



require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users_gestion.php");

if(!isset($_SESSION)){
    session_start();
}
unset($_SESSION['errores']);

$pass_antigua = filter_var($_POST['password_antigua'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$pass2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING);

$conexion = new Conexion_users_gestion();

$usuario = $conexion->getUsuario($_SESSION['id']);

$errores = $conexion->validarEditarPass($usuario, $pass_antigua, $pass, $pass2);
//var_dump(implode($errores));

if(empty($errores['password_antigua']) && empty($errores['password'])){
    $usuario->setPassword($pass);
    
    $conexion->actualizar($usuario);
    $_SESSION['mensaje'] = "Tu contraseña ha sido actualizada correctamente.";
    require_once('index.php');
    //header('Location: index.php');
} else{
    $_SESSION['errores'] = $errores;
    //require_once('editar_password.php');
    header('Location: editar_password.php');
}
