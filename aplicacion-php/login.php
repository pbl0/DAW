<?php
if(isset($_SESSION['mensaje'])){
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}

?>


<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body style="margin-top: 70px;">
	<?php require_once("template/partials/menu.php") ?>
	

	<div class="container col-md-3">
		<?php require_once("template/partials/mensaje.php") ?>
		<?php require_once("template/users/formulario_login.php") ?>
	</div>


	<?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
</body>

</html>