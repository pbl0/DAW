<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        
        <legend>Tabla Clubs</legend>
        <?php require_once("template/clubs/menubar.php") ?>
        <table class="table">
            <thead class="">
                <tr>
                    <?php foreach ($cabecera as $valor) : ?>
                        <th><?= $valor ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clubs as $club) : ?>
                    <tr>
                    

                        <td><?= $club->id ?></td>
                        <td><?= $club->nombreCorto ?></td>
                        <td><?= $club->nombre ?></td>
                        <td><?= $club->ciudad ?></td>
                        <td><?= $club->fecFundacion ?></td>
                        <td><?= $club->numSocios ?></td>
                        

                        <td>
                        <a href="form_editar_club.php?id=<?= $club->id ?>" title="Editar"><i class="material-icons">edit</i></a>
                        <a href="form_mostrar_club.php?id=<?= $club->id ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        <a href="eliminar_club.php?id=<?= $club->id ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                        <a href="mostrar_corredores.php?id=<?= $club->id ?>" title="Corredores"><i class="material-icons">people</i></a>
                        
                        </td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        Registros: <?= $clubs->rowcount();?>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>