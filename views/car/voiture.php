<?php
$page = "other";
include VIEWS . 'inc/header.php'; ?>
<?php $allCars = car::showDb(); ?>




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
        <!-- <img src=" <= PHOTO . $allCars[$i]['picture'] ?> " class="d-block mx-auto rounded" alt="voiture" style="width:50%"> -->
<?php
    }
}
?>
<!-- <a class="btn btn-success" href="panier">Aller a l'Achat</a> -->

<div class="box-info1">
    <!-- <div class="box-img"> -->
    <div class="box-info2">
        <?php

        for ($i = 0; $i < count($allCars); $i++) {

            if ($_GET['id'] == $allCars[$i]['id_car']) {
        ?>


                <!-- </div> -->

                <div class="imginfo">


                    <img src="<?= PHOTO . $allCars[$i]['picture'] ?>" alt="voiture" height="546px">
                </div>






                <div class="box-infosbis">

                    <!-- <div class="share">
                        <p>Partagé</p>
                        <i class="fa-sharp fa-light fa-share"></i>
                    </div> -->



                    <div class="sousbox1">


                        <h1><?= $allCars[$i]['title'] ?></h1>

                        <ul>
                            <li><?= $allCars[$i]['creation_year'] ?></li>
                            <li><?= $allCars[$i]['miles'] ?> km</li>
                            <li><?= $allCars[$i]['transmission'] ?></li>
                            <li><?= $allCars[$i]['fuel'] ?></li>
                        </ul>

                        <h3><?= $allCars[$i]['price'] ?> €</h3>
                    </div>

                    <div class="sousbox2">
                        <div class="btx">

                        </div>
                        <li><b>Posibilité de finacement</b></li>
                        <li><b>Livraison internationale</b></li>
                        <li><b>Garantie 6 mois</b></li>
                    </div>

                </div>









    </div>



    <div class="box-info3">
        <div class="caract">

            <h3>CARACTÉRISTIQUES</h3>

            <div class="caract-list">
                <ul>
                    <li>Marque</li>
                    <li>Modèles</li>
                    <li>Transmission</li>
                    <li>Carburant</li>
                </ul>
                <ul>
                    <li><b>BMW</b></li>
                    <li><b><?= $allCars[$i]['id_cat'] ?></b></li>
                    <li><b><?= $allCars[$i]['transmission'] ?></b></li>
                    <li><b><?= $allCars[$i]['fuel'] ?></b></li>
                </ul>
                <ul>
                    <li>Année</li>
                    <li>Kilometrage</li>
                    <li>Couleur</li>
                    <li>Puissance fiscale</li>
                </ul>
                <ul>
                    <li><b><?= $allCars[$i]['creation_year'] ?></b></li>
                    <li><b><?= $allCars[$i]['miles'] ?> KM</b></li>
                    <li><b><?= $allCars[$i]['color'] ?> </b></li>
                    <li><b><?= $allCars[$i]['power'] ?> CV</b></li>
                </ul>
            </div>
        </div>
        <div class="contact">

            <h3>CONTACT</h3>

            <div class="contact-list">
                <div>
                    <p>Obtenez plus d’information en contactant notre broker en charge : <b>Thomas</b></p>
                </div>

                <ul>
                    <li><b>Thomas@3pm.com</b></li>
                    <li><b>+ 33 7 01 02 03 04</b></li>
                </ul>
            </div>

        </div>
<?php
            }
        }
?>
    </div>
</div>

<div class="container-voiture">


    <h2>AUTRES ANNONCES</h2>

    <div class="annonces-v">
        <div class="box-annonces">
            <a href="#">
                <img src="<?= ROOT . "IMGM3/3e30c.webp" ?>" alt="">
            </a>
            <div class="nom_prix">
                <p>lorem</p>
                <p>ipsum</p>
            </div>
        </div>
        <div class="box-annonces">
            <a href="#">
                <img src="<?= ROOT . "IMGM3/3e30c.webp" ?>" alt="">
            </a>
            <div class="nom_prix">
                <p>lorem</p>
                <p>ipsum</p>
            </div>
        </div>
        <div class="box-annonces">
            <a href="#">
                <img src="<?= ROOT . "IMGM3/3e30c.webp" ?>" alt="">
            </a>
            <div class="nom_prix">
                <p>lorem</p>
                <p>ipsum</p>
            </div>
        </div>

    </div>
</div>







<?php include VIEWS . 'inc/footer.php'; ?>