<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_nuevo_club.php">Crear</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ordenar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="ordenar_club.php?criterio=nombreCorto">Nombre Corto</a>
          <a class="dropdown-item" href="ordenar_club.php?criterio=nombre">Nombre</a>
          <a class="dropdown-item" href="ordenar_club.php?criterio=ciudad">Ciudad</a>
          <a class="dropdown-item" href="ordenar_club.php?criterio=fecFundacion">Fecha de Fundación</a>
          <a class="dropdown-item" href="ordenar_club.php?criterio=numSocios">Nº Socios</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input name="expresion" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" formaction="buscar_club.php" type="submit">Buscar</button>
    </form>
  </div>
</nav>