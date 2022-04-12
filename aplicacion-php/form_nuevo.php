<?php

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$corredores = new Conexion_maratoon();
$categorias = $corredores->getCategorias();
$clubs = $corredores->getClubs();

?> 
<!doctype html>
<html lang="es"> 
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/head.php") ?>

    <body>
        <?php require_once("template/partials/cabecera.php") ?>
        
        <!-- Page Content -->
        <div class="container">
            
            <?php require_once("template/formNuevo.php") ?>
            
        </div>
        <!-- /.container -->

        <?php require_once("template/partials/footer.php") ?>
        <?php require_once("template/partials/javascript.php") ?>
    </body>

</html>

