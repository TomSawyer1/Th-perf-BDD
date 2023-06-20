<?php
$page = "other";
include VIEWS . 'inc/header.php';
include VIEWS . 'inc/chemin.php';
?>

<h1 class="text-center my-5"> Page profil de <?= !empty($_SESSION['user']['first_name']) ? $_SESSION['user']['first_name'] : ""; ?></h1>

<div class="container-mid">
    <div class="newsletter">
        <div class="Nnom">
            <h3>ENTREZ DANS LA COMMUNAUTÉ</h3>
            <img src="<?= ROOT . "Logo/blacklogo.svg" ?>" id="logo2" alt="logo">
        </div>
        <div class="Nimput">
            <p> Soyez alerté de nos exclusivités</p>
            <div class="box-imput3">
                <label for="">EMAIL@MAIL.COM</label>
            </div>
        </div>
    </div>

</div>
<?php include VIEWS . 'inc/footer.php'; ?>