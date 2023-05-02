<?php include VIEWS . 'inc/header.php'; ?>


<h1 class="text-center my-5">Ajout d'une voiture !</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<form action="" method="post" enctype="multipart/form-data" class="w-50 mx-auto">


    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        <label for="title"> Title</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        <label for="description"> Description</label>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Model</label>
        </div>
        <?php $allCategorie = CatController::fetchAllCategorie(); ?>
        <select class="custom-select" id="inputGroupSelect01" name="model">
            <option value="">Choose an Model</option>
            <?php foreach ($allCategorie as $value) { ?>
                <option value='<?= $value["id_cat"] ?>'><?= $value["name"] ?></option>
            <?php } ?>
        </select>
    </div>


    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="price" placeholder="price" name="price">
        <label for="price">Price</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="color" placeholder="color" name="color">
        <label for="color">Color</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="miles" placeholder="Miles" name="miles">
        <label for="miles">Miles</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="power" placeholder="Power" name="power">
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
            <label for="nb_door"> N° Door</label>
        </div>
    </div>
    <label for="picture">Picture</label>
    <input type="file" name="picture" id="picture">
    <br>

    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php include VIEWS . 'inc/footer.php'; ?>