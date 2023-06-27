<?php
$page = "other";
$title = "Panier";
include VIEWS . 'inc/header.php';

if (!App::isconnect()) {
    header("Location:" . BASE_PATH . "connexion");
}

if (!App::isadmin()) {
    header("Location:" . BASE_PATH . "");
}

?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

    unset($breadcrumb['Connexion']);
    unset($breadcrumb['Inscription']);
    unset($breadcrumb['Profil']);
    unset($breadcrumb['Ajouter un véhicule']);
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


<div class="panier">

    <div class="container-panier">


        <div class="resume-panier">
            <p> Votre Panier</p>
            <?php
            if (isset($_SESSION['panier'])) {

                $prixTotal = 0; // Initialiser le prix total à 0

                foreach ($_SESSION['panier'] as $produitId => $quantite) {
                    // Récupérer les informations du produit à partir de l'ID
                    $car = Car::recupcar_panier($produitId);

                    // Vérifier si le produit existe
                    if (!empty($car)) {
                        $produit = $car[0]; // Récupérer la première ligne des résultats

                        // Utiliser les informations du produit
            ?>
                        <div class="infos-panier">

                            <div class="ip">
                                <img src="<?= IMAGES . $produit['picture'] ?>" id="panier-img" alt="<?= $produit['title'] ?>" width="80px" height="80px">
                            </div>
                            <div class="it">
                                <p><b><?= $produit['title'] ?></b></p>
                                <p><?= $produit['description'] ?></p>
                                <p><b><?= $produit['price'] ?> € </b></p>
                            </div>

                            <div class="is">
                                <a href="supp_panier?id=<?= $produit['id_car'] ?>">
                                    <i class="fa-solid fa-trash" style="color: #4171A3;"></i>
                                </a>
                            </div>

                        </div>

            <?php

                        // Ajouter le prix du produit multiplié par la quantité au prix total
                        $prixTotal += $produit['price'] * $quantite;
                    }
                }
            }
            ?>

        </div>








        <div class="val-panier">
            <div class="total">
                <?php
                if (isset($_SESSION['panier'])) {

                ?>
                    <p>Quantité : <?= PanierController::getQuantiteTotale() ?></p>
                    <p>Total Panier : <b><?= $prixTotal ?> €</b></p>

                <?php
                }
                ?>
                <a href="#">
                    <button class="button" id="g2">Validé</button>
                </a>
            </div>
            <div class="logo-panier">
                <img src="<?= ASSET ?>Logo/logo3pm1.png" id="logo2" alt="logo">
            </div>
        </div>


    </div>
</div>

<?php include VIEWS . 'inc/footer.php'; ?>