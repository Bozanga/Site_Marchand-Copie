<?php


$path = ($_SERVER['DOCUMENT_ROOT']);
include_once $path . '/init.php'; 
?>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= URL ?>src/Controller/MarqueController.php?param=liste">Marque</a></li>
            <li><a class="dropdown-item" href="<?= URL ?>src/Controller/TvaController.php?param=liste">Tva</a></li>
            <li><a class="dropdown-item" href="<?= URL ?>src/Controller/ProduitController.php?param=liste">Produits</a></li>
          </li>
      
      </ul>
    </div>
  </div>
</nav>

