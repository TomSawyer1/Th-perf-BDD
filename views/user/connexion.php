<?php
$title = "Connexion";
include VIEWS . 'inc/header.php';

?>


<!--<h1 class="text-center my-5">Connexion </h1> 

        <form method="post" action="" class="w-50 mx-auto">

            <div class="form-floating mb-3">
              <label for="user" class="form-label">Mail</label>
              <input type="mail" class="form-control" name="mail" id="mail" aria-describedby="emailHelpId" placeholder="mail">
            </div>
            <div class="form-floating mb-3">
              <label for="floatinfPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>

            <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
            
        </form>
-->
<form method="post" action="login">

  <section class="vh-100" style="background-color: #1c2e31;">
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
  </section>





</form>


<?php

var_dump($_SESSION['user']);
//UserController::connexion();
include VIEWS . 'inc/footer.php';
?>