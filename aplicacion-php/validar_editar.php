<?php 

require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users_gestion.php");

if(!isset($_SESSION)){
    session_start();
}
unset($_SESSION['errores']);

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

$conexion = new Conexion_users_gestion();

$usuario = $conexion->getUsuario($_SESSION['id']);

$errores = $conexion->validarEditar($usuario, $name, $email);
//var_dump(implode($errores));
//var_dump($errores['name']);
if(is_null($errores['name']) && is_null($errores['email'])){
    $usuario->setName($name);
    $usuario->setEmail($email);

    $conexion->actualizar($usuario);
    
    $_SESSION['mensaje'] = "Tu perfil ha sido actualizado correctamente.";
    //header('Location: editar_perfil.php');
    require_once('index.php');
} else{
    $_SESSION['errores'] = $errores;
    header('Location: editar_perfil.php');
    //require_once('editar_perfil.php');
}


