<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            <!--<?php if (isset($title)) {?>
              <?php echo $title;?>
      <?php } else {  ?>
        Blue Bird Online
      <?php } ?>-->
      
      <!--<?php if (isset($title)) {?>
        <?php echo $title;?>
      <?php } else {  ?>
        Blue Bird Online
      <?php } ?>-->
    </title>
        <!-- lien avec mon fchier css -->
        <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
</html>
<header> <!--mise en place de mon header via bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand title" href="index.php">Blue Bird Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- on ajoute la classe active pour mettre en evidence la page active -->
        <li class="nav-item">
          <a class="nav-link <?php echo !empty($article)?"active":"" ?>" aria-current="page" href="article.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo !empty($commande)?"active":"" ?>" href="commande.php">Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo !empty($client)?"active":"" ?>" href="client.php"> Clients</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Connexion / Inscription
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Connexion</a></li>
            <li><a class="dropdown-item" href="">Inscription</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="rechercher un article" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">rechercher</button>
      </form>
    </div>
  </div>
</nav>
<section class="containerHead"> 
      <img class="mainImg" src="img\imgaccueil.png" alt="photo accueil">
      <figure>
        <figcaption class="bienvenue">Blue Bird Online</figcaption>
        <figcaption class="slogan"><span class="blue">T</span>u commandes t'es content</figcaption>
      </figure>
  </section>
    </header>
    </body>