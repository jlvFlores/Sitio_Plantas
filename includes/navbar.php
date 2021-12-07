<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/Flores.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($page=='inicio'){echo 'active';}?>" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=='catalogo'){echo 'active';}?>"" href="catalog.php">Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=='portafolio'){echo 'active';}?>"" href="portfolio.php">Portafolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=='contacto'){echo 'active';}?>"" href="contact.php">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>