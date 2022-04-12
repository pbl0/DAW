<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body>
    <div class="container">
        <?php require_once("template/partials/cabecera.php") ?>
        
        <!-- menu -->
        <?php require_once("template/menu.php") ?>
        
        <section>
            <article>
            
                <!-- Contenido -->
                <div class="container table-responsive">
                    <h2 class="text-center">Articulos</h2>
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse thead-dark">
                            <tr>
                            <?php foreach ($cabecera as $indice): ?>
                                <th><?=$indice?></th>
                            <?php endforeach; ?>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($tabla as $indice => $linea): ?>
                            <tr>
                                <?php foreach ($linea as $valor): ?>
                                    <td><?=$valor?></td>
                                <?php endforeach; ?>
                                <td>
                                <a href="eliminar.php?indice=<?=$indice?>" title="Eliminar"><i class="material-icons">delete</i></a>
                                <a href="form_editar.php?indice=<?=$indice?>" title="Editar"><i class="material-icons">edit</i></a>
                                <a href="form_mostrar.php?indice=<?=$indice?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <small class="text-muted">Total: <?= count($tabla)?> artículos</small>
                </div>
                
            </article>
        </section>
        <?php require_once("template/partials/footer.php") ?>

    </div>

    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>
