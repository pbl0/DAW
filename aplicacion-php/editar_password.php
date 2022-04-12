<?php

if(!isset($_SESSION)){
    session_start();
}
require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users_gestion.php");

if (!is_null($_SESSION['id'])) {
    $conexion = new Conexion_users_gestion();

    $usuario = $conexion->getUsuario($_SESSION['id']);
    $name = $usuario->getName();
    $email = $usuario->getEmail();


} else{
    header('Location: login.php');
}

?>

<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body style="margin-top: 70px;">
	<?php require_once("template/partials/menu.php") ?>
	
    
	<div class="container col-md-3">


        <?php require_once("template/users/form_editar_password.php") ?>
        
       
	</div>


	<?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
</body>

</html>