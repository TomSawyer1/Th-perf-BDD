<?php 

// include("inc/init.inc.php");
// include("inc/functions.inc.php");


$title = "Profil";

//echo time();



// Si il n'y a pas de session, on fait toutes les vérifs
// Sinon, on passe directe sur la page
if (!isset($_SESSION["nom"])) 
{
	// On rentre dans le if si le user n'existe pas ou si il est vide
	if (!isset($_POST["nom"]) || empty($_POST["nom"]))
	{
		$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
  				SVP, veuillez remplir le champs login
			</div>";
		
	}

	// On fait la requete en base de donnee que si les 2 premiers portier n'ont pas vue d'erreurs
	if (!empty($_SESSION["message"]))
	{
		header('Location: connexion.php');
		exit();
	}

	// On fait la requete en base de donne avec le login

	$login = strtolower(htmlspecialchars($_POST["user"]));
	// $password = htmlspecialchars($_POST["password"]);


	$requete = "SELECT * FROM town WHERE login = ?";

	$requetePreparee = $bdd->prepare($requete);

	$reponse = $requetePreparee->execute([
			$login
		]);

	if (!$reponse)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
  				Il y a eu un probleme avec l'execution de la requete
			</div>";
		header('Location: connexion.php');
		exit();
	}

	// Si le login n'existe pas en bdd, message d'erreur
	if ($requetePreparee->rowCount() == 0)
	{
		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
  				Votre login n'existe pas
			</div>";
		header('Location: connexion.php');
		exit();
	}

	// Si le user existe, on verifie le mdp
	// if ($requetePreparee->rowCount() == 1)
	// {
	// 	$userFromBdd = $requetePreparee->fetch(PDO::FETCH_ASSOC);
	// 	// echo "<pre>";
	// 	// print_r($userFromBdd);
	// 	// echo "</pre>";
	// 	// die;

	// 	$hach_password = $userFromBdd["password"];
	// 	if (!password_verify($password, $hach_password))
	// 	{
	// 		$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
  	// 			Votre mdp est incorrect
	// 		</div>";
	// 	}
	
	// }



	if (!empty($_SESSION["message"]))
	{
		header('Location: connexion.php');
		exit();
	}

	setcookie("nom", $_POST["town"], time() + 3 * 30 * 24 * 60 * 60);
	$_SESSION["town"] = $userFromBdd;
}
$requetebis = "SELECT  `nom`, `pays`, `capital`, `pop` FROM `town` WHERE `id_town` = ?";

$requetePreparee = $bdd->prepare($requetebis);

$reponse = $requetePreparee->execute([

	$nom,
	$pays,
	$capital,
	$pop
	

]);

if (!$reponse)
{
	$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  Quelque chose ne s'est pas déroulé correctement pendant la requete
		</div>";

}

if ($reponse)
{
	$allUsers = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
	// echo "<pre>";
	// print_r($allUsers);
	// echo "</pre>";

}


include("inc/head.inc.php");
include("inc/header.inc.php");




?>

<h1 class="text-center my-5">Page de profil<h1>

<?php
include("inc/footer.inc.php");

?>
