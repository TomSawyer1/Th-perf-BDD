<?php include VIEWS . 'inc/header.php'; ?>

<h1 class="text-center my-5">Liste des </h1>

<?php



for ($i = 0; $i < count($car); $i++) {
    if ($_GET['id'] == $car[$i]['id_car']) {
?>


        <h1 class="text-center my-5"><?= $car[$i]['title'] ?></h1>

        <div> <img src=" <?= PHOTO . $car[$i]['picture'] ?> " alt=""> </div>


<?php
    }
}

?>

<?php include VIEWS . 'inc/footer.php'; ?>