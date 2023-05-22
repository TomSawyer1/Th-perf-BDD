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
    if (!empty($allCars[$i]['picture'])) {
    ?>
        <img src=" <?= PHOTO . $allCars[$i]['picture'] ?> " alt="voiture">
<?php
    }
}
?>





<?php include VIEWS . 'inc/footer.php'; ?>