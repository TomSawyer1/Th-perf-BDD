<?php

// que pour l'inscription
class UserController extends Db
{
	public static function register()
	{



		if (!empty($_POST)) 					// Si le formulaire est rempli
		{
			User::verifyData($_POST);			// On vérifie toutes les infos

			if (empty($_SESSION["message"]))	// Si y'a pas d'erreur
			{
				/*User::insertData();*/
				$user = new user();

				$user->createFromPost($_POST);

				$user->insertDb();

				if (empty($_SESSION["message"]))
				{
					$_SESSION["message"] .= "Ca a marché<br>";
					header("Location:" . BASE_PATH . "connexion");
					exit;
				}
				else
				{
					$_SESSION["message"] .= "Ca a pas marché<br>";

				}
			}
		}

		include VIEWS . "user/register_form.php";
		// echo "Mon controller register fonctionne hyper bien<br>";
	}

	public static function connexion()
	{
		$query="SELECT * FROM `user` WHERE `mail`=? AND `password`=?";

		$requetePreparee = self::getDb()->prepare($query);
        
        $reponse = $requetePreparee->execute([
            $_POST["mail"],
            $_POST["password"]
    ]);
        // tableau associatif d'element :
        $Users_connecte = $requetePreparee->fetch(PDO::FETCH_ASSOC);
        

        //verifie si la requete s'est bien déroulé
        if (!$reponse)
        {
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                     Erreur au niveau de la requete SQL !
               </div>";
        }

        // si authentification reussi
        if ($requetePreparee->rowCount() == 1)
        {
            $_SESSION['user']= $Users_connecte;
            header("Location:" . BASE_PATH . "connexion");
            $_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
            Bonjour " .$_SESSION['user']['prenom']. "</div>";

            // echo($_SESSION['user']['nom']);
        }

       // erreur authentification
        if ($requetePreparee->rowCount() == 0) {
            header("Location:" . BASE_PATH . "connexion");
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
            Erreur d'authentification ! veuillez réssayer
      </div>";
        }



		
		include VIEWS . "user/connexion.php";
	}

	public static function tab_user()
	{
		$user = new user();
		$requete = user::showDb("SELECT * FROM `user`");
		$user->showDb($requete);

		include VIEWS . "admin/admin.php";

	}


	public static function remove()
	{

	$requete = "DELETE FROM `user` WHERE `id_user` = ?";

	$requetePreparee = self::getDb()->prepare($requete);

	$reponse = $requetePreparee->execute([
		$_GET["id"]
		]);

	if (!$reponse)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La requete ne s'est pas déroulé correctement
		</div>";
		header("Location:" . BASE_PATH . "administration");
		exit;
	}

	if ($requetePreparee->rowCount() == 0)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  L'utilisateur que vous essayez de supprimer, n'existe pas !
		</div>";
		header("Location:" . BASE_PATH . "administration");
		exit;
	}

	if ($requetePreparee->rowCount() == 1)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
			  Vous avez bien supprimé l'utilisateur dont l'id est " . $_GET["id"] . "
		</div>";
		header("Location:" . BASE_PATH . "administration");
		exit;
	}
	



		include VIEWS . "admin/admin.php";
	}
}
