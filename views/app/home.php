<?php include VIEWS . 'inc/header.php';

// if (isset($_SESSION['id'])) {
//     $var = "Bonjour " . $_SESSION['mail'];
// } else {
//     $var = "Bonjour a tous";
// }

?>
<h1 class="text-center my-5">3PM</h1>
<!-- <h1 class="text-center my-5"><?= $var ?> </h1> -->
<h1 class="text-center my-5"><?= $connected == 'false' ? "Bienvenue " . $_SESSION['user']['first_name'] : ""; ?></h1>



<?php include VIEWS . 'inc/footer.php'; ?>