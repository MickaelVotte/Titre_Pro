<?php include('../elements/top.php')   ?>

<header>

  <nav class=" colorbg navbar navbar-expand-lg shadow-5-strong mb-4 pb-4">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">E&N</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav  text-center">
          <li class="nav-item">
            <a class="nav-link onglet" aria-current="page" href="../view/home.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link onglet" href="../view/event.php">Evènements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link onglet" href="../view/comu.php">Communauté</a>
          </li>
          <li class="nav-item">
            <a class="nav-link onglet" href="../view/settings.php">Paramètres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link onglet" href="../view/subscribe.php">S'inscrire</a>
          </li>
        </ul>
      </div>

      <div class="d-flex justify-content-end">
        <a class="nav-link" href="../view/login.php"><i class="bi bi-person-circle fs-4"></i></a>
      </div>

    </div>
  </nav>

</header>