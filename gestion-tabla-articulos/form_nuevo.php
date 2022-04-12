<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");
    
    // Genera tabla categorias:
    $categorias = generarCategorias();
  
?>

<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body>

    <div class="container">
        <!-- cabecera -->
        <?php require_once("template/partials/cabecera.php") ?>

        <section>
            <article>
                <?php require_once("template/partials/formNuevo.php") ?>
            </article>
        </section>
        <?php require_once("template/partials/footer.php") ?>

    </div>

    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>
