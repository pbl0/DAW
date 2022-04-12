<?php 
require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users_gestion.php");

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$pass1 = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$pass2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);

$conexion = new Conexion_users_gestion();
if(!isset($_SESSION)){
    session_start();
}
unset($_SESSION['errores']);


// $usuario_email = $conexion->getUsuario_email($email);

// $errores = [];

$user = new User(
    null,
    $name,
    $email,
    $pass1

);

$errores = $conexion->validarUser($user, $pass2);



if(is_null($errores['name']) && is_null($errores['password']) && is_null($errores['email'])){
    $conexion->crear($user);
    $_SESSION['mensaje'] = "Te has registrado correctamente. Puedes iniciar sesión.";
    require_once('login.php');
    
} else{
    $_SESSION['errores'] = $errores;
    require_once('register.php');
}



?>