<?php
$page = "home";
include VIEWS . 'inc/header.php';

$car = Car::showDb();



?>
<div class="back">

    <div class="video-container">
        <video autoplay loop muted>

            <source src="<?= ASSET; ?>videos/Seq M3.mp4" type="video/mp4">
        </video>

    </div>
    <div class="M3">
        <h1>BMW M3</h1>
        <a href="#">
            <button class="button">En savoir plus</button>
        </a>
    </div>

    <h1 class="text-center my-5"><?= $connected == 'false' ? "Bienvenue " . $_SESSION['user']['first_name'] : ""; ?></h1>

</div>

<div class="container">
    <h2>DERNIERES ANNONCES</h2>
    <div class="annonces">

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
            if ($cpt == 6) {
                break;
            }
        }
        ?>

    </div>
</div>


<div class="container-mid">
    <div class="newsletter">
        <div class="Nnom">
            <h3>ENTREZ DANS LA COMMUNAUTÉ</h3>
            <img src="<?= ASSET; ?>Logo/blacklogo.svg" id="logo2" alt="logo">
        </div>
        <div class="Nimput">
            <p> Soyez alerté de nos exclusivités</p>
            <div class="box-imput3">
                <label for="newslet">EMAIL@MAIL.COM</label>
                <input type="text" name="newslet" id="newslet" onclick="effacerLabel('newslet')">
            </div>
        </div>
    </div>

</div>


<div class="container-back">
    <h2>M3 DE LA SEMAINE</h2>
    <div class="space">


        <div class="Mweek">
            <img src=" <?= ASSET; ?>IMGM3/3f80cs.webp" alt="">
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
            <img src="<?= ASSET; ?>IMGM3/3e3010.jpg" alt="">

        </div>

    </div>
</div>



<?php include VIEWS . 'inc/footer.php'; ?>