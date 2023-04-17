<?php  include VIEWS.'inc/header.php'; ?>


        <h1 class="text-center my-5">Connexion </h1>

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


<?php  
UserController::connexion();
include VIEWS.'inc/footer.php'; 
?>