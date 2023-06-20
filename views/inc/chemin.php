<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);
    unset($breadcrumb['Liste voitures']);
    // Début du fil d'Ariane
    echo '<ul class="breadcrumb">';

    // Parcours des éléments du fil d'Ariane
    foreach ($breadcrumb as $title => $url) {
        // Lien actif (dernier élément du fil d'Ariane)
        if ($url == '#') {
            echo '<li class="active">' . $title . '</li>';
        }
        // Liens normaux
        else {
            echo '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
    }

    // Fin du fil d'Ariane
    echo '</ul>';

    ?>





</div>