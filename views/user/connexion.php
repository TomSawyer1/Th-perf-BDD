<?php
$page = "other";
$title = "Connexion";
include VIEWS . 'inc/header.php';

?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

  <?php

  $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

  unset($breadcrumb['Catégorie']);
  unset($breadcrumb['BMW M']);
  unset($breadcrumb['Inscription']);
  unset($breadcrumb['Ajouter un véhicule']);
  unset($breadcrumb['Liste voitures']);
  unset($breadcrumb['Profil']);
  unset($breadcrumb['Panier']);




  // Début du fil d'Ariane
  echo '<ul class="breadcrumb">';

  // Parcours des éléments du fil d'Ariane
  foreach ($breadcrumb as $title => $url) {
    // Lien actif (dernier élément du fil d'Ariane)
    if ($url == '#') {
      $breadcrumbHtml[] = '<li class="active">' . $title . '</li>';
    }
    // Liens normaux
    else {
      $breadcrumbHtml[] = '<li><a href="' . $url . '">' . $title . '</a></li>';
    }
  }

  // Concaténation avec des slashs
  $breadcrumbString = implode(' / ', $breadcrumbHtml);

  // Affichage du fil d'Ariane
  echo $breadcrumbString;

  // Fin du fil d'Ariane
  echo '</ul>';

  ?>
</div>

<div class="container-connect">
  <div class="img">
    <img src="<?= ASSET . "IMGM3/3f90cs.jpeg" ?>" alt="3F90">
  </div>
  <div class="login-box">
    <h2>CONNEXION</h2>

    <form method="post" action="" id="connect">
      <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

      $_SESSION["message"] = "";
      ?>
      <div class="user-box">


        <label class="form-label" for="typeEmailX-2">EMAIL</label>
        <input type="email" id="typeEmailX-2" onclick="effacerLabelmail()" class="form-control form-control-lg" name="mail" value="<?= !empty($_SESSION['mail']) ? $_SESSION['mail'] : ""; ?>">
      </div>
      <div class="user-box">
        <label class="form-label" for="typePasswordX-2">MOT DE PASSE</label>
        <input type="password" id="typePasswordX-2" onclick="effacerLabelmdp()" class="form-control form-control-lg" name="password" />
      </div>
      <button class="button-connect" type="submit">Se connecter</button>
      <p class="message">Pas encore inscrit ? <a href="inscription">S'inscrire</a></p>
    </form>
  </div>