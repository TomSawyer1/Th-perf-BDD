<?php
$page = "other";
include VIEWS . 'inc/header.php';
include VIEWS . 'inc/chemin.php';
?>



<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<!-- <form method="post" action="" class="w-50 mx-auto">

	<div class="row g-3">
		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="prenom" placeholder="Prenom" name="first_name">
			<label for="prenom"> Prenom</label>
		</div>

		<div class="form-floating col-md-6 mb-3">
			<input type="text" class="form-control" id="nom" placeholder="Nom" name="last_name">
			<label for="nom"> Nom</label>
		</div>
	</div>



	<div class="form-floating mb-3">
		<input type="mail" class="form-control" id="mail" placeholder="mail" name="mail">
		<label for="user">Mail</label>
	</div>

	<div class="form-floating mb-3">
		<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		<label for="floatingPassword">Password</label>
	</div>

	<div class="form-floating mb-3">
		<input type="tel" class="form-control" id="address" placeholder="Address" name="address">
		<label for="floatingPassword">Address</label>
	</div>

	<input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form> -->

<div class="form-inscription">


	<div class="inscrip-box">
		<h2>INSCRIPTION</h2>

		<form method="post" action="" id="inscription">

			<div class="user-box2">

				<div class="sous-user-box">
					<label for="prenom"> Prenom</label>
					<input type="text" class="form-control" id="prenom" onclick="effacerLabelfirst_name()" name="first_name">


				</div>
				<div class="sous-user-box">
					<label for="nom"> Nom</label>
					<input type="text" class="form-control" id="nom" name="last_name">


				</div>

			</div>

			<div class="i-box">
				<label for="user">Mail</label>
				<input type="mail" class="form-control" id="mail" name="mail">


			</div>

			<div class="i-box">
				<label for="floatingPassword">Password</label>
				<input type="password" class="form-control" id="password" name="password">


			</div>

			<div class="i-box">
				<label for="floatingPassword">Address</label>
				<input type="tel" class="form-control" id="address" name="address">


			</div>


			<button class="button-inscrip" type="submit">S'inscrire</button>
		</form>
	</div>
</div>

<?php include VIEWS . 'inc/footer.php'; ?>