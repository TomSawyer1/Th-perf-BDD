<?php include VIEWS . 'inc/header.php';

if (!App::isconnect()) {
    header("Location:" . BASE_PATH . "");
}

if (!App::isadmin()) {
    header("Location:" . BASE_PATH . "");
} ?>


<h1 class="text-center my-5">Ajout d'une Categorie !</h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

$_SESSION["message"] = "";
?>

<form method="post" action="" class="w-50 mx-auto">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        <label for="name">Name</label>
    </div>


    <input type="submit" class="btn btn-primary mt-3" value="Submit" name="submit">
</form>

<?php include VIEWS . 'inc/footer.php'; ?>