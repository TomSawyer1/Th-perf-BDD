<?php include VIEWS . 'inc/header.php'; ?>


<h1 class="text-center my-5">Ajout d'une voiture !</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<form method="post" action="" class="w-50 mx-auto">


    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Titre" name="title">
        <label for="title"> Titre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        <label for="description"> Description</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="price" placeholder="price" name="price">
        <label for="price">Prix</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="color" placeholder="color" name="color">
        <label for="color">Color</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="kilometrage" placeholder="Kilometrage" name="kilometrage">
        <label for="kilometrage">Kilometrage</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="power" placeholder="power" name="power">
        <label for="power">Power</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="fuel" placeholder="Fuel" name="fuel">
        <label for="fuel">Fuel</label>
    </div>

    <div class="row g-3">
        <div class="form-floating col-md-6 mb-3">
            <input type="text" class="form-control" id="creation_year" placeholder="Date" name="creation_year">
            <label for="creation_year"> Creation Year</label>
        </div>

        <div class="form-floating col-md-6 mb-3">
            <input type="text" class="form-control" id="nb_door" placeholder="Nb_door" name="nb_door">
            <label for="nb_door"> Nombre de portes</label>
        </div>
    </div>


    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php include VIEWS . 'inc/footer.php'; ?>