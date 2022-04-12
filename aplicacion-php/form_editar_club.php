<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

# Realizo la conexión
$clubs = new Conexion_club();

# Obtengo id del corredor que se desea editar
$id = $_GET['id'];

# Obtengo en un objeto corredor los datos
$club = $clubs->getClub($id);

?> 
<!doctype html>
<html lang="es"> 
<?php require_once("template/partials/menu.php") ?>
<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/cabecera.php") ?>
    
    <!-- Page Content -->
    <div class="container">
        
        <?php require_once("template/clubs/formEditarClub.php") ?>
        
    </div>
    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>