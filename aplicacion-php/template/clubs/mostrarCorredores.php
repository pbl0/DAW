<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        
        <legend>Corredores de <?= $club->getNombre() ?></legend>
        <table class="table">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Categoria</th>
                    <th>Club</th>

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
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
        Registros: <?= $corredores->rowcount();?>
        <br>
        <a name="" id="" class="btn btn-primary" href="indexClubs.php" role="button">Volver</a>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>