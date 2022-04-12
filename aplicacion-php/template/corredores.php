<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        <?php require_once("template/partials/mensaje.php") ?>
        <legend>Tabla Corredores</legend>
        <?php require_once("template/partials/menubar.php") ?>
        <table class="table">
            <thead class="">
                <tr>
                    <?php foreach ($cabecera as $valor) : ?>
                        <th><?= $valor ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($corredores as $corredor) : ?>
                    <tr>
                    

                        <td><?= $corredor->id ?></td>
                        <td><?= $corredor->nombre ?></td>
                        <td><?= $corredor->apellidos ?></td>
                        <td><?= $corredor->email ?></td>
                        <td><?= $corredor->edad ?></td>
                        <td><?= $corredor->categoria ?></td>
                        <td><?= $corredor->club ?></td>

                        <td>
                        <?php if ($rol_id == 1 || $rol_id == 2):?>
                        <a href="form_editar.php?id=<?= $corredor->id ?>" title="Editar"><i class="material-icons">edit</i></a>
                        <?php endif ?>

                        <a href="form_mostrar.php?id=<?= $corredor->id ?>" title="Mostrar"><i class="material-icons">visibility</i></a>

                        <?php if ($rol_id == 1):?>
                        <a href="eliminar.php?id=<?= $corredor->id ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                        <?php endif ?>
                        </td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        Registros: <?= $corredores->rowcount();?>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>