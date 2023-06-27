<?php
$page = "other";
include VIEWS . 'inc/header.php';
if (!App::isconnect()) {
      header("Location:" . BASE_PATH . "");
}

if (!App::isadmin()) {
      header("Location:" . BASE_PATH . "");
}
?>

<h1 class="text-center my-5">Liste des Utilisateurs </h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

/*$_SESSION["message"] = "";*/
?>
<table class="table table-striped container">

      <thead>
            <tr>

                  <th scope="col">id_user</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Mail</th>
                  <th scope="col">Password</th>
                  <th scope="col">Address</th>
                  <th scope="col">Statut</th>

            </tr>
      </thead>
      <tbody class="table-striped">
            <?php

            $allUsers = User::showDb();
            foreach ($allUsers as $user) {

            ?>

                  <tr>
                        <td><?= $user["id_user"] ?></td>
                        <td><?= $user["first_name"] ?></td>
                        <td><?= $user["last_name"] ?></td>
                        <td><?= $user["mail"] ?></td>
                        <td><?= $user["password"] ?></td>
                        <td><?= $user["address"] ?></td>
                        <td><?= $user["statut"] ?></td>
                        <td>
                              <a href="supprimer?id=<?= $user["id_user"] ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                        <td>
                              <a href="modifier?id=<?= $user["id_user"] ?>" class="btn btn-primary">Modifier</a>

                        </td>

                  </tr>
            <?php
            }
            ?>
      </tbody>
</table>

<?php include VIEWS . 'inc/footer.php'; ?>