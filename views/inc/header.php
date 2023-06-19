<?php
$connected = App::isconnect();

$admin = null;

if ($connected == 'false') {
	$admin = App::isadmin();
}


?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" ,content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3PM</title>
	<meta name="description" content="3PM">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a67ce56d07.js" crossorigin="anonymous"></script>
	<!-- <script src="main.js" defer></script> -->
	<link rel="stylesheet" href="<?= ROOT . "reset.css" ?>">
	<link rel="stylesheet" href="<?= ROOT . "style.css" ?>">
	<script src="<?= ROOT . "js/main.js" ?>" defer></script>





</head>

<header>
	<nav id="nav1" class="wrapper <?php echo $page === "home" ? "home_nav" : "other"; ?>">
		<div class="logo">
			<a href="index.html"><img src="<?= ROOT . "Logo/logo3pm1.png" ?>" id="logo" alt="logo"></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Histoire</a></li>
				<li class="deroulant">
					<a href="#">
						Models
					</a>
					<ul class="sub-menu">
						<li><a href="#">Tous les modèles </a></li>
						<li><a href="#">M3 E30</a></li>
						<li><a href="#">M3 E36</a></li>
						<li><a href="#">M3 E46</a></li>
						<li><a href="#">M3 E90</a></li>
						<li><a href="#">M3 F80</a></li>
					</ul>
				</li>
				<li><a href="#">Acheter</a></li>
				<li><a href="#">3PM ?</a></li>
				<?php
				if ($connected == 'false') {


				?>
					<li><a href='ajoutcar'>Vendre</a></li>
				<?php
				}
				?>
			</ul>
		</div>
		<div class="outil">
			<ul style="display: flex; justify-content:end;">
				<li><i class="fa-solid fa-magnifying-glass"></i></li>
				<li><a href='panier'><?= !$connected == 'false' ? "" : ""; ?> <i class="fa-solid fa-cart-shopping"></i></a>


				</li>
				<li class="deroulant2">
					<div class="test">
						<i class="fa-regular fa-user">
						</i>
					</div>
					<ul class="sub-menu2">
						<li><a href='connexion'><?= !$connected == 'false' ? "Connexion" : ""; ?></a></li>
						<li><a href='inscription'><?= !$connected == 'false' ? "Inscription" : ""; ?></a></li>
						<?php
						if ($connected == 'false') {

						?>

							<li><a href="#">Profil</a></li>
							<li><a href="deconnexion"> Deconnecter</a></li>
						<?php
						}
						?>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

</header>

<body>
	<!-- <nav class="navbar navbar-expand-lg navbar-dark p-3 " style="background-color:#1C2331;" id="headerNav">
		<div class="container-fluid">

			<div class=" collapse navbar-collapse" id="">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2" aria-current="page" href="home">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2" href="#">Histoire</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2" href="showcat">Categorie</a>
					</li>

					<li class='nav-item'>
						<a class='nav-link mx-2' href='inscription'><?= !$connected == 'false' ? "Inscription" : ""; ?></a>
					</li>

					<li class='nav-item'>
						<a class='nav-link mx-2' href='ajoutcar'><?= $connected == 'false' ? "Vendre" : ""; ?></a>
					</li>

					<li class='nav-item'>
						<a class='nav-link mx-2' href='connexion'><?= !$connected == 'false' ? "Connexion" : ""; ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link mx-2" href="profil"> <?= !empty($_SESSION['user']['first_name']) ? $_SESSION['user']['first_name'] : ""; ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link mx-2" href="deconnexion"> <?= $connected == 'false' ? "Se deconnecter" : ""; ?></a>
					</li>

					<li class='nav-item'>
						<a class='nav-link mx-2' href='panier'><?= !$connected == 'false' ? "Panier" : ""; ?></a>
					</li>

			</div>
		</div>
	</nav> -->