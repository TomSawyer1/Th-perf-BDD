<?php
$page = "other";
include VIEWS . 'inc/header.php'; ?>

<h1 class="text-center my-5"> Page profil de <?= !empty($_SESSION['user']['first_name']) ? $_SESSION['user']['first_name'] : ""; ?></h1>


<?php include VIEWS . 'inc/footer.php'; ?>