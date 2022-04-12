<form action="validar_editar.php" method="post">
  <legend class="border-bottom">Editar Perfil</legend>
  <fieldset>
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text"
          class="form-control" name="name" id="" aria-describedby="helpId" placeholder=""
          value="<?= $name ?>">
          
          <small id="helpId" class="form-text text-muted">Nombre de usuario entre 5 y 50 caracteres</small>

      </div>
  </fieldset>
  <fieldset>
    <div class="form-group">
      <label for="">Correo Electronico</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder=""
      value="<?= $email ?>">
      <small id="helpId" class="form-text text-muted">Introduce un correo electronico válido</small>
      <small id="helpId" class="form-text text-danger">
        <?= (isset($_SESSION['errores']['email'])) ? $_SESSION['errores']['email'] : null ?>
      </small>
      
    </div>
  </fieldset>


  <button type="submit" class="btn btn-primary">Editar</button>
  <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
</form>
