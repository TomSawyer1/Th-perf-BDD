<?php $allCars = car::showDb(); ?>
<?php include VIEWS . 'inc/header.php'; ?>



<?php

for ($i = 0; $i < count($allCars); $i++) {

    if ($_GET['id'] == $allCars[$i]['id_car']) {
?>
        <h1 class="text-center my-5"><?= $allCars[$i]['title'] ?></h1>

        <p class="text-center my-5"><?= $allCars[$i]['description'] ?></p>
    <?php
    }
    if ($_GET['id'] == $allCars[$i]['id_car']) {
    ?>
        <img src=" <?= PHOTO . $allCars[$i]['picture'] ?> " class="d-block mx-auto rounded" alt="voiture" style="width:50%">
<?php
    }
}
?>
<a class="btn btn-success" href="panier">Aller a l'Achat</a>







<?php include VIEWS . 'inc/footer.php'; ?>