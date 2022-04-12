<?php

require_once("class/club.php");
require_once("class/conexion.php");
require_once("class/conexion_club.php");

$clubs = new Conexion_club();



?> 
<!doctype html>
<html lang="es"> 
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/head.php") ?>

    <body>
        <?php require_once("template/partials/cabecera.php") ?>
        
        <!-- Page Content -->
        <div class="container">
            
            <?php require_once("template/clubs/formNuevoClub.php") ?>
            
        </div>
        <!-- /.container -->

        <?php require_once("template/partials/footer.php") ?>
        <?php require_once("template/partials/javascript.php") ?>
    </body>

</html>
