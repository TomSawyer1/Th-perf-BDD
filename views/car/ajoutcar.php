<?php
$page = "other";
include VIEWS . 'inc/header.php';
?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

    unset($breadcrumb['Catégorie']);
    unset($breadcrumb['Liste voitures']);
    unset($breadcrumb['Connexion']);
    unset($breadcrumb['Inscription']);
    unset($breadcrumb['Profil']);
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




<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>

<div class="form-inscription">


    <div class="inscrip-box">
        <h2>AJOUTER UNE VOITURE</h2>

        <form method="post" action="" enctype="multipart/form-data" id="inscription">

            <div class="i-box">

                <label for="title"> TITRE</label>
                <input type="text" class="form-control" id="title" onclick="effacerLabel('title')" name="title">

            </div>
            <div class="i-box">

                <label for="description"> DESCRIPTION</label>
                <input type="text" class="form-control" id="description" onclick="effacerLabel('description')" name="description">

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Model</label>
                </div>
                <?php $allCategorie = CatController::fetchAllCategorie(); ?>
                <select class="custom-select" id="inputGroupSelect01" name="id_cat">
                    <option value="">Choose an Model</option>
                    <?php foreach ($allCategorie as $value) { ?>
                        <option value='<?= $value["id_cat"] ?>'><?= $value["name"] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="i-box">

                <label for="transmission">TRANSMISSION</label>
                <input type="text" class="form-control" id="transmission" onclick="effacerLabel('transmission')" name="transmission">

            </div>
            <div class="i-box">

                <label for="price">PRIX</label>
                <input type="text" class="form-control" id="price" onclick="effacerLabel('price')" name="price">

            </div>
            <div class="i-box">

                <label for="color">COULEUR</label>
                <input type="text" class="form-control" id="color" onclick="effacerLabel('color')" name="color">

            </div>

            <div class="i-box">

                <label for="miles">KILOMETRES</label>
                <input type="text" class="form-control" id="miles" onclick="effacerLabel('miles')" name="miles">



            </div>

            <div class="i-box">

                <label for="power">PUISSANCE FISCAUX</label>
                <input type="text" class="form-control" id="power" onclick="effacerLabel('power')" name="power">

            </div>

            <div class="i-box">

                <label for="fuel">CARBURANT</label>
                <input type="text" class="form-control" id="fuel" onclick="effacerLabel('fuel')" name="fuel">

            </div>

            <div class="user-box2">

                <div class="sous-user-box">
                    <label for="creation_year"> ANNÉE DE CRÉATION</label>
                    <input type="text" class="form-control" id="creation_year" onclick="effacerLabel('creation_year')" name="creation_year">


                </div>
                <div class="sous-user-box">
                    <label for="nb_door"> N° PORTE</label>
                    <input type="text" class="form-control" id="nb_door" onclick="effacerLabel('nb_door')" name="nb_door">


                </div>

            </div>

            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture">

            <button class="button-val" type="submit" name="submit">Valider</button>
        </form>
    </div>
</div>

<?php include VIEWS . 'inc/footer.php'; ?>