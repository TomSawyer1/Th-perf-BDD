<?php
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

<h1 class="text-center my-5"> Panier</h1>

<?php include VIEWS . 'inc/footer.php'; ?>