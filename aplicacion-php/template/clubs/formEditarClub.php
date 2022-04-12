<legend>Formulario Crear Club</legend>
<form method="POST" action="editar_club.php">

    <input name="id" type="number" class="invisible" id="" value = "<?= $club->getId()?>" >
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" placeholder=""
        value="<?= $club->getNombre()?>">
    </div>
    <div class="form-group">
        <label for="">Nombre Corto</label>
        <input name="nombreCorto" type="text" class="form-control" id="" placeholder=""
        value="<?= $club->getNombreCorto()?>">
    </div>
    <div class="form-group">
        <label for="">Ciudad</label>
        <input name="ciudad" type="text" class="form-control" id="" placeholder=""
        value="<?= $club->getCiudad()?>">
    </div>
    <div class="form-group">
        <label for="">Fecha de Fundación</label>
        <input name="fecFundacion" type="date" class="form-control" id="" placeholder=""
        value="<?= $club->getFecFundacion()?>">
    </div>
    <div class="form-group">
        <label for="">Número de Socios</label>
        <input name="numSocios" type="number" class="form-control" id="" placeholder=""
        value="<?= $club->getNumSocios()?>">
    </div>
    <a class="btn btn-secondary" href="indexClubs.php" role="button">Cancelar</a>
    <button class="btn btn-dark" type="reset">Reset</button>
    <button type="submit" class="btn btn-primary">Actualizar</button>

</form>