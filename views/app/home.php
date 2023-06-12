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

<div class="container-back">
    <h2>M3 DE LA SEMAINE</h2>
    <div class="Mweek">
        <img src="<?= ROOT . "IMGM3/3f80cs.webp" ?>" alt="">
        <div class="nom">
            <h2>BMW M3 F80 CS</h2>
            <p>lorem</p>
        </div>
    </div>
</div>



<?php include VIEWS . 'inc/footer.php'; ?>