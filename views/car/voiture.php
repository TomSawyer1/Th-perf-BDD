<?php
$page = "other";
include VIEWS . 'inc/header.php';

?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

    unset($breadcrumb['Connexion']);
    unset($breadcrumb['Inscription']);
    unset($breadcrumb['Profil']);
    unset($breadcrumb['Ajouter un véhicule']);
    unset($breadcrumb['Panier']);

    // Début du fil d'Ariane
    echo '<ul class="breadcrumb">';

    // Parcours des éléments du fil d'Ariane
    foreach ($breadcrumb as $title => $url) {
        // Lien actif (dernier élément du fil d'Ariane)
        if ($url == '#') {
            $breadcrumbHtml[] = '<li class="active">' . $title . '</li>';
        }
        // Liens normaux
        else {
            $breadcrumbHtml[] = '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
    }

    // Concaténation avec des slashs
    $breadcrumbString = implode(' / ', $breadcrumbHtml);

    // Affichage du fil d'Ariane
    echo $breadcrumbString;

    // Fin du fil d'Ariane
    echo '</ul>';

    ?>
</div>
<?php

$car = Car::showDb();
?>
<?php $allCars = car::showDb(); ?>


<div class="box-info1">
    <div class="box-info2">
        <?php

        for ($i = 0; $i < count($allCars); $i++) {

            if ($_GET['id'] == $allCars[$i]['id_car']) {
        ?>


                <!-- </div> -->

                <div class="imginfo">


                    <img src="<?= IMAGES . $allCars[$i]['picture'] ?>" alt="voiture" height="546px">
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

                            <a href="#">
                                <button class="button" id="blue">Message</button>
                            </a>
                            <a href="add_panier?id=<?= $allCars[$i]['id_car'] ?>">
                                <button class="button" id="green">Ajouter au panier</button>
                            </a>

                        </div>
                        <div class="infop">


                            <li><b>Posibilité de finacement</b></li>
                            <li><b>Livraison internationale</b></li>
                            <li><b>Garantie 6 mois</b></li>
                        </div>
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
        <?php
        //melange le tableau
        shuffle($car);
        $cpt = 0;
        foreach ($car as $cars) {
            $cpt++
        ?>

            <div class="box-annonces">
                <a href="#">
                    <img src="<?= IMAGES . $cars['picture']  ?>" alt="">
                </a>
                <div class="nom_prix">
                    <p><?= $cars['title'] ?></p>
                    <p><?= $cars['price'] ?> €</p>
                </div>
            </div>

        <?php
            if ($cpt == 3) {
                break;
            }
        }
        ?>

    </div>
</div>







<?php include VIEWS . 'inc/footer.php'; ?>