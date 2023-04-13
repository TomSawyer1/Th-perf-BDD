<?php  include VIEWS.'inc/header.php'; ?>


			<h1 class="text-center my-5">Vous êtes au bon endroit pour vous enregistrez !</h1>
	<?= isset($_SESSION["message"]) ? $_SESSION["message"] : ""; 
	
			$_SESSION["message"] = "";
	?>
	<form method="post" action="" class="w-50 mx-auto">
	
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

<!--	<div class="form-floating mb-3">
		<input type="text" class="form-control" id="user" placeholder="Pseudo" name="pseudo">
		<label for="user">Pseudo</label>
	</div>
-->

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
</form>

<?php  include VIEWS.'inc/footer.php'; ?>