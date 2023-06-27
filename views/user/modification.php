<?php

$page = "other";
$title = "Modification";
include VIEWS . 'inc/header.php';
$userFromBdd = user::modifier();
// app::showArray($userFromBdd);
if (!App::isconnect()) {
	header("Location:" . BASE_PATH . "");
}

if (!App::isadmin()) {
	header("Location:" . BASE_PATH . "");
}
?>


<h1 class="text-center my-5">Modification utilisateur</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<form method="post" action="enregistrement?id=<?= $userFromBdd["id_user"] ?>" class="w-50 mx-auto">

	<div class="row g-3">
		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="prenom" placeholder="Prenom" name="first_name" value="<?= !empty($userFromBdd['first_name']) ? $userFromBdd['first_name'] : ""; ?>">
			<label for="prenom"> Prenom</label>
		</div>

		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="nom" placeholder="Nom" name="last_name" value="<?= !empty($userFromBdd['last_name']) ? $userFromBdd['last_name'] : ""; ?>">
			<label for="nom"> Nom</label>
		</div>
	</div>

	<div class="form-floating mb-3">
		<input type="mail" class="form-control" id="mail" placeholder="mail" name="mail" value="<?= !empty($userFromBdd['mail']) ? $userFromBdd['mail'] : ""; ?>">
		<label for="user">Email</label>
	</div>

	<div class="form-floating mb-3">
		<input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?= !empty($userFromBdd['password']) ? $userFromBdd['password'] : ""; ?>">
		<label for="floatingPassword">Mot de passe</label>
	</div>

	<div class="form-floating mb-3">
		<input type="tel" class="form-control" id="address" placeholder="Address" name="address" value="<?= !empty($userFromBdd['address']) ? $userFromBdd['address'] : ""; ?>">
		<label for="floatingPassword">Adresse</label>
	</div>

	<input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php

include VIEWS . 'inc/footer.php';
?>