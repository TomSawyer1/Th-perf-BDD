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
	<link rel="shortcut icon" href="<?= ASSET; ?>Logo/logo3pm1.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a67ce56d07.js" crossorigin="anonymous"></script>
	<!-- <script src="main.js" defer></script> -->
	<link rel="stylesheet" href="<?= ASSET; ?>css/reset.css">
	<link rel="stylesheet" href="<?= ASSET; ?>css/style.css">
	<script src="<?= ASSET; ?>js/main.js" defer></script>





</head>

<header>
	<nav id="nav1" class="wrapper <?php echo $page === "home" ? "home_nav" : "other"; ?>">
		<div class="logo">
			<a href="index.html"><img src="<?= ASSET; ?>Logo/logo3pm1.png" id="logo" alt="logo"></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="<?= BASE_PATH . "histoire" ?>">Histoire</a></li>
				<li class="deroulant">
					<a href="#">
						Models
					</a>
					<ul class="sub-menu">
						<li><a href="<?= BASE_PATH . "showcat" ?>">Tous les modèles </a></li>

						<li><a href="<?= BASE_PATH . "listcar?id=1" ?>">M3 E30</a></li>
						<li><a href="<?= BASE_PATH . "listcar?id=2" ?>">M3 E36</a></li>
						<li><a href="<?= BASE_PATH . "listcar?id=3" ?>">M3 E46</a></li>
						<li><a href="<?= BASE_PATH . "listcar?id=4" ?>">M3 E90</a></li>
						<li><a href="<?= BASE_PATH . "listcar?id=5" ?>">M3 F80</a></li>
						<li><a href="<?= BASE_PATH . "listcar?id=6" ?>">M3 G80</a></li>

					</ul>
				</li>
				<li><a href="<?= BASE_PATH . "showcat" ?>">Acheter</a></li>
				<li><a href="<?= ROOT . "404" ?>">3PM ?</a></li>
				<?php
				if ($connected == 'false') {


				?>
					<li><a href='<?= BASE_PATH . "ajoutcar" ?>'>Vendre</a></li>
				<?php
				}
				?>
			</ul>
		</div>
		<div class="outil">
			<ul style="display: flex; justify-content:end;">
				<li><i class="fa-solid fa-magnifying-glass"></i></li>
				<li><a href='<?= BASE_PATH . "panier" ?>'><?= !$connected == 'false' ? "" : ""; ?> <i class="fa-solid fa-cart-shopping"></i></a>
					<!-- <li> //PanierController::getQuantiteTotale() ?</li> -->

				</li>
				<li class="deroulant2">
					<div class="test">
						<i class="fa-regular fa-user">
						</i>
					</div>
					<ul class="sub-menu2">

						<li><a href='<?= BASE_PATH . "connexion" ?>'><?= !$connected == 'false' ? "Connexion" : ""; ?></a></li>
						<li><a href='<?= BASE_PATH . "inscription" ?>'><?= !$connected == 'false' ? "Inscription" : ""; ?></a></li>
						<?php
						if ($connected == 'false') {

						?>

							<li><a href="<?= BASE_PATH . "profil" ?>"><?= $_SESSION['user']['first_name'] ?></a></li>
							<li><a href="<?= BASE_PATH . "deconnexion" ?>"> Deconnecter</a></li>
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