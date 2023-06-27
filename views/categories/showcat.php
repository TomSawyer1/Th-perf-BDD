<?php
$page = "other";
include VIEWS . 'inc/header.php';
?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);
    unset($breadcrumb['Liste voitures']);
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



<div class="back">

    <div class="video-container">
        <video autoplay loop muted>

            <source src="<?= ASSET .  "videos/BMWMAnimation.mp4" ?>" type="video/mp4">
        </video>

    </div>
    <div class="M3">
        <h1>Tous nos modèles M3</h1>

    </div>


</div>

<div class="catcontainer">

    <?php

    $allCategorie = categorie::showDb();
    $compteur = 0;

    foreach ($allCategorie as $categorie) {
        $compteur++;
    ?>

        <div class="cat-1">
            <div class="loop">


                <h1><?= $categorie['name'] ?></h1>
                <a href="listcar?id=<?= $categorie["id_cat"] ?>">
                    <button class="button-cat" type="button">Voir Plus</button>
                </a>
            </div>
            <img src="<?= ASSET . "IMGM3/" . $categorie['image'] ?>" alt="<?= $categorie['name'] ?>">
        </div>


    <?php
        if ($compteur == 6) {
            break;
        }
    }

    ?>

</div>


<?php include VIEWS . 'inc/footer.php'; ?>