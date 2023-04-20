<?php include VIEWS . 'inc/header.php'; ?>


<h1 class="text-center my-5">Ajout d'une voiture !</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>
<form method="post" action="" class="w-50 mx-auto">


    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        <label for="title"> Title</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        <label for="description"> Description</label>
    </div>

    <div class="form-floating mb-3 w-100">
        <input type="text" class="form-control" id="brand" placeholder="Brand" name="brand">
        <label for="brand">Brand</label>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Model</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option value="">Choose an Model</option>
            <?php
            $model = array(

                $categorie["name"]
                //"M31" => "M3 E30",
                //"M32" => "M3 E36"
            );

            foreach ($model as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
            ?>
        </select>
    </div>

    <!--
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label for="model-select"> Model</label>
        </div>


        <select name="model" id="model-select">
            <option value="">Choose an Model</option>

            <?php
            $model = array(

                "M31" => "M3 E30",
                "M32" => "M3 E36"
            );

            foreach ($model as $key => $value) {
                echo "<option value='$key'>$value</option>";
            }
            ?>
        </select>
    </div>
        -->

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


    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php include VIEWS . 'inc/footer.php'; ?>