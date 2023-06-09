<?php include VIEWS . 'inc/header.php';

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



    <?php include VIEWS . 'inc/footer.php'; ?>