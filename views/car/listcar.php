<?php include VIEWS . 'inc/header.php';


$car = Car::showDb();

if ($_GET['id'] == '1') {
    $categorie = 'M3 E30';
} elseif ($_GET['id'] == '2') {
    $categorie = 'M3 E36';
}
?>
<h1 class="text-center my-5"><?= $categorie ?></h1>
<div class="container">
    <div class="row fluid">
        <?php
        for ($i = 0; $i < count($car); $i++) {
            if ($_GET['id'] == $car[$i]['id_cat']) {
                $produit = array($car[$i]);

                for ($y = 0; $y < count($produit); $y++) {

        ?>




                    <h3 class="text-center my-5"><?= $produit[$y]['title'] ?></h3>
                    <div> <img src=" <?= PHOTO . $produit[$y]['picture'] ?> " class="img-fluid" width="400" height="600" alt="<?= $produit[$y]['title'] ?>"> </div>
                    <p class="text-center"><?= $produit[$y]['color'] ?></p>
                    <p class="text-center"><?= $produit[$y]['nb_door'] ?></p>
                    <p class="text-center"><?= $produit[$y]['power'] ?></p>
                    <p class="text-center"><?= $produit[$y]['fuel'] ?></p>
                    <p class="text-center"><?= $produit[$y]['miles'] ?></p>


        <?php
                }
            }
        }
        ?>
    </div>
</div>
<?php include VIEWS . 'inc/footer.php'; ?>