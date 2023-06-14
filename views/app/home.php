<?php
$page = "home";
include VIEWS . 'inc/header.php';

// if (isset($_SESSION['id'])) {
//     $var = "Bonjour " . $_SESSION['mail'];
// } else {
//     $var = "Bonjour a tous";
// }

?>
<div class="back">

    <div class="video-container">
        <video autoplay loop muted>
            <!-- <source src="Seq M3.mp4" type="video/mp4"> -->
            <source src="<?= ROOT . "videos/Seq M3.mp4" ?>" type="video/mp4">
        </video>

    </div>
    <div class="M3">
        <h1>BMW M3</h1>
        <a href="#">
            <button class="button">En savoir plus</button>
        </a>
    </div>
    <!-- <h1 class="text-center my-5">3PM</h1> -->
    <!-- <h1 class="text-center my-5"><?= $var ?> </h1> -->
    <h1 class="text-center my-5"><?= $connected == 'false' ? "Bienvenue " . $_SESSION['user']['first_name'] : ""; ?></h1>

</div>

<div class="container">
    <h2>DERNIERES ANNONCES</h2>
    <div class="annonces">
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

<!-- <div class="container-mid">

    <div class="newsletter">
        <h2 id="title-newsletter">Notre newsletter</h2>
        <form class="form-newsletter">
            <input id="newsletter-input" type="email" placeholder="Saisir votre adresse email" name="newsletter">
            <a href="#"><iconify-icon id="icn-send" icon="iconamoon:send-light" width="24" height="24" rotate="315deg"></iconify-icon></a>
        </form>
    </div> -->

<div class="container-mid">
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

</div>


<div class="container-back">
    <h2>M3 DE LA SEMAINE</h2>
    <div class="space">


        <div class="Mweek">
            <img src="<?= ROOT . "IMGM3/3f80cs.webp" ?>" alt="">
            <div class="nom">
                <h2>BMW M3 F80 CS</h2>
                <p> Une berline F80 BMW M3 est revenue à la puissance 6 cylindres,
                    cette fois avec turbo sur le moteur 3.0L S55.
                    Le modèle a été produit de 2014 à 2018 et comportait soit une boîte manuelle à 6 vitesses,
                    soit une transmission à double embrayage à 7 vitesses.</p>
            </div>
        </div>

        <div class="Mweek">
            <div class="nom">
                <h2>BMW M3 E30</h2>
                <p> Un châssis brillant, des fusées éclairantes appropriées,
                    une ligne rouge à 7 000 tr / min et de la place pour quatre,
                    la E30 M3 est définitivement l'une des meilleures candidates
                    en lice pour la quintessence de la voiture de sport de tous les jours.
                    La nôtre nous manque encore.</p>
            </div>
            <img src="<?= ROOT . "IMGM3/3e3010.jpg" ?>" alt="">

        </div>

    </div>
</div>



<?php include VIEWS . 'inc/footer.php'; ?>