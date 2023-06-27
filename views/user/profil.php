<?php
$page = "other";
$title = "Modification";
include VIEWS . 'inc/header.php';


// $userFromBdd = user::modifier();
?>
<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">

    <?php

    $breadcrumb = App::getBreadcrumbData($_SERVER['REQUEST_URI']);

    unset($breadcrumb['Catégorie']);
    unset($breadcrumb['BMW M']);
    unset($breadcrumb['Connexion']);
    unset($breadcrumb['Inscription']);
    unset($breadcrumb['Ajouter un véhicule']);
    unset($breadcrumb['Liste voitures']);
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

<h1 class="text-center my-5"> Page profil de <?= !empty($_SESSION['user']['first_name']) ? $_SESSION['user']['first_name'] : ""; ?></h1>


<div class="profil">


    <div class="profil-bis">



        <div class="contactdetail">
            <h2>CONTACT DETAIL</h2>

            <div class="user-box2">

                <div class="sous-user-box">

                    <label for="usr"> PRENOM</label>
                    <input type="text" class="form-control" id="prenom" onclick="effacerLabelusr()" name="first_name" value="<?= !empty($userFromBdd['first_name']) ? $userFromBdd['first_name'] : ""; ?>">

                </div>
                <div class="sous-user-box">

                    <label for="nom"> NOM</label>
                    <input type="text" class="form-control" id="nom" onclick="effacerLabelnom()" name="last_name" value="<?= !empty($userFromBdd['last_name']) ? $userFromBdd['last_name'] : ""; ?>">

                </div>

            </div>

            <div class="i-box">

                <label for="mail">EMAIL</label>
                <input type="mail" class="form-control" id="mail" onclick="effacerLabelmail()" name="mail" value="<?= !empty($userFromBdd['mail']) ? $userFromBdd['mail'] : ""; ?>">


            </div>
            <div class="i-box">

                <label for="floatingPassword">MOT DE PASSE</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= !empty($userFromBdd['password']) ? $userFromBdd['password'] : ""; ?>">


            </div>
            <div class="i-box">

                <label for="floatingPassword">ADRESSE</label>
                <input type="tel" class="form-control" id="address" name="address" value="<?= !empty($userFromBdd['address']) ? $userFromBdd['address'] : ""; ?>">

            </div>

            <button class="button-val" type="submit" name="submit">Valider</button>

        </div>


        <div class="onwer">
            <h2>PROPRIETAIRE</h2>
        </div>


    </div>
</div>

















<!-- <div class="container-mid">
    <div class="newsletter">
        <div class="Nnom">
            <h3>ENTREZ DANS LA COMMUNAUTÉ</h3>
            <img src="<?= ROOT . "Logo/blacklogo.svg" ?>" id="logo2" alt="logo">
        </div>
        <div class="Nimput">
            <p> Soyez alerté de nos exclusivités</p>
            <div class="box-imput3">
                <label for="">EMAIL@MAIL.COM</label>
            </div>
        </div>
    </div>

</div> -->
<?php include VIEWS . 'inc/footer.php'; ?>