<?php
include VIEWS . 'inc/header.php';


if (!App::isconnect()) {
    header("Location:" . BASE_PATH . "");
}

if (!App::isadmin()) {
    header("Location:" . BASE_PATH . "");
}

$carFromBdd = Car::recupcar();
?>

<h1 class="text-center my-5">Modification Voiture</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>

<form method="post" action="modifcar?id=<?= $carFromBdd["id_car"] ?>" class="w-50 mx-auto">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?= !empty($carFromBdd['title']) ? $carFromBdd['title'] : ""; ?>">
        <label for="title"> Title</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="<?= !empty($carFromBdd['description']) ? $carFromBdd['description'] : ""; ?>">
        <label for="description"> Description</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="transmission" placeholder="transmission" name="transmission" value="<?= !empty($carFromBdd['transmission']) ? $carFromBdd['transmission'] : ""; ?>">
        <label for="transmission">Transmission</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="price" placeholder="price" name="price" value="<?= !empty($carFromBdd['price']) ? $carFromBdd['price'] : ""; ?>">
        <label for="price">Price</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="miles" placeholder="Miles" name="miles" value="<?= !empty($carFromBdd['miles']) ? $carFromBdd['miles'] : ""; ?>">
        <label for="miles">Miles</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="power" placeholder="Power" name="power" value="<?= !empty($carFromBdd['power']) ? $carFromBdd['power'] : ""; ?>">
        <label for="power">Power</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="fuel" placeholder="Fuel" name="fuel" value="<?= !empty($carFromBdd['fuel']) ? $carFromBdd['fuel'] : ""; ?>">
        <label for="fuel">Fuel</label>
    </div>

    <div class="row g-3">
        <div class="form-floating col-md-6 mb-3">
            <input type="text" class="form-control" id="creation_year" placeholder="Date" name="creation_year" value="<?= !empty($carFromBdd['creation_year']) ? $carFromBdd['creation_year'] : ""; ?>">
            <label for="creation_year"> Creation Year</label>
        </div>

        <div class="form-floating col-md-6 mb-3">
            <input type="text" class="form-control" id="nb_door" placeholder="Nb_door" name="nb_door" value="<?= !empty($carFromBdd['nb_door']) ? $carFromBdd['nb_door'] : ""; ?>">
            <label for="nb_door"> N° Door</label>
        </div>
    </div>

    <br>
    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">

</form>

<?php include VIEWS . 'inc/footer.php'; ?>