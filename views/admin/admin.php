<?php  
$title = "Administration";
include VIEWS.'inc/header.php';


?>


			<h1 class="text-center my-5">Vous êtes au bon endroit pour gerez vos utilisateur inscrit !</h1>
                  <?= isset($_SESSION["message"]) ? $_SESSION["message"] : ""; 

			$_SESSION["message"] = "";
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
            <th scope="col">Date de creation</th>
            <th scope="col">Statut</th>

      </tr>
</thead>
<tbody class="table-striped">
<?php       

            $allUsers=User::showDb();
            foreach ($allUsers as $user)
             {
                 
                ?>

                <tr>
                    <td><?=$user["id_user"]?></td>
                    <td><?=$user["first_name"]?></td>
                    <td><?=$user["last_name"]?></td>
                    <td><?=$user["mail"]?></td>
                    <td><?=$user["password"]?></td>
                    <td><?=$user["address"]?></td>
                    <td><?=$user["date_creation"]?></td>
                    <td><?=$user["statut"]?></td>
                  <td> 

                       

                  </td>
                  <td> 

                       

                  </td>

                </tr>
                <?php
             }
            ?>
    </tbody>
</table>

<?php  include VIEWS.'inc/footer.php'; ?>