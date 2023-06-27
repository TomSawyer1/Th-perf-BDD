<?php
$page = "other";
include VIEWS . 'inc/header.php';

?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

	<?php

	$breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

	unset($breadcrumb['Catégorie']);
	unset($breadcrumb['BMW M']);
	unset($breadcrumb['Connexion']);
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



<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>

<div class="form-inscription">


	<div class="inscrip-box">
		<h2>INSCRIPTION</h2>

		<form method="post" action="" id="inscription">

			<div class="user-box2">
				<div class="sous-user-box">
					<label for="prenom" id="label-prenom">PRENOM</label>
					<input type="text" class="form-control" id="prenom" onclick="effacerLabel('prenom')" name="first_name">
				</div>
				<div class="sous-user-box">
					<label for="nom" id="label-nom">NOM</label>
					<input type="text" class="form-control" id="nom" onclick="effacerLabel('nom')" name="last_name">
				</div>
			</div>


			<div class="i-box">
				<label for="mail" id="label-mail">EMAIL</label>
				<input type="text" class="form-control" id="mail" onclick="effacerLabel('mail')" name="mail">


			</div>

			<div class="i-box">
				<label for="password" id="label-password">MOT DE PASSE</label>
				<input type="text" class="form-control" id="password" onclick="effacerLabel('password')" name="password">


			</div>

			<div class="i-box">
				<label for="address">ADRESSE</label>
				<input type="text" class="form-control" id="address" onclick="effacerLabel('address')" name="address">


			</div>


			<button class="button-inscrip" type="submit">S'inscrire</button>
		</form>
	</div>
</div>

<?php include VIEWS . 'inc/footer.php'; ?>