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
    unset($breadcrumb['BMW M']);
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

if ($_GET['id'] == '1') {
    $categorie = 'M3 E30';
} elseif ($_GET['id'] == '2') {
    $categorie = 'M3 E36';
} elseif ($_GET['id'] == '3') {
    $categorie = 'M3 E46';
} elseif ($_GET['id'] == '4') {
    $categorie = 'M3 E90';
} elseif ($_GET['id'] == '5') {
    $categorie = 'M3 F80';
} elseif ($_GET['id'] == '6') {
    $categorie = 'M3 G80';
}
?>
<h1 class="text-center my-5"><?= $categorie ?></h1>
<div class="container">
    <div class="annonces">
        <?php

        for ($i = 0; $i < count($car); $i++) {
            if ($_GET['id'] == $car[$i]['id_cat']) {
                $produit = array($car[$i]);

                for ($y = 0; $y < count($produit); $y++) {

        ?>



                    <div class="box-annonces">
                        <a href="voircar?id=<?= $produit[$y]["id_car"] ?>&cat=<?= $produit[$y]["id_cat"] ?>">
                            <img src="<?= IMAGES . $produit[$y]['picture'] ?>" class="backlist" alt="<?= $produit[$y]['title'] ?>">
                        </a>
                        <div class="nom_prix">
                            <p><?= $produit[$y]['title'] ?></p>
                            <p><?= $produit[$y]['price'] ?> €</p>
                        </div>
                    </div>

        <?php
                }
            }
        }
        ?>
    </div>
</div>
<?php include VIEWS . 'inc/footer.php'; ?>