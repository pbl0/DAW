<?php
    // Carga funciones
    require_once("lib/funcionesTabla.php");

    $indice = $_GET["indice"];

    // Genera array de libros $tabla
    $tabla = generarTabla();

    // Genera tabla categorias:
    $categorias = generarCategorias();

    // Recoge articulo a editar
    $articulo = $tabla[$indice];
  
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
                <?php require_once("template/partials/formEditar.php") ?>
            </article>
        </section>
        <?php require_once("template/partials/footer.php") ?>

    </div>

    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>