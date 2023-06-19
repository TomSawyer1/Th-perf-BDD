<?php
$page = "other";
$title = "Connexion";
include VIEWS . 'inc/header.php';

?>

<div class="container-connect">
  <div class="img">
    <img src="<?= ROOT . "IMGM3/3f90cs.jpeg" ?>" alt="3F90">
  </div>
  <div class="login-box">
    <h2>Connexion</h2>

    <form method="post" action="">
      <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

      $_SESSION["message"] = "";
      ?>
      <div class="user-box">
        <!-- <input type="text" name="username" required> -->
        <!-- <label>Nom d'utilisateur</label> -->

        <label class="form-label" for="typeEmailX-2">Email</label>
        <input type="email" id="typeEmailX-2" onclick="effacerLabelmail()" class="form-control form-control-lg" name="mail" value="<?= !empty($_SESSION['mail']) ? $_SESSION['mail'] : ""; ?>">
      </div>
      <div class="user-box">
        <label class="form-label" for="typePasswordX-2">Mot de passe</label>
        <input type="password" id="typePasswordX-2" onclick="effacerLabelmdp()" class="form-control form-control-lg" name="password" />
      </div>
      <button class="button-connect" type="submit">Se connecter</button>
      <p class="message">Pas encore inscrit ? <a href="#">S'inscrire</a></p>
    </form>
  </div>

  <!-- <section class="vh-100" style="background-color: #1c2e31;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Se connecter</h3>
              <?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

              $_SESSION["message"] = "";
              ?>
              <div class="form-outline mb-4">
                <label class="form-label" for="typeEmailX-2">Email</label>
                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="mail" value="<?= !empty($_SESSION['mail']) ? $_SESSION['mail'] : ""; ?>">

              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">mot de passe</label>
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" />


              </div>
              <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">

            </div>
          </div>
        </div>
      </div>
  </section> -->

  </form>


  <?php

  // var_dump($_SESSION['user']);
  //UserController::connexion();
  /*include VIEWS . 'inc/footer.php';*/
  ?>