<pre>
<?php print_r($_FILES); ?>
<?php print_r($_POST); ?>


<?php


// Occupons nous d'enregistrer le fichier

if (isset($_FILES["photo"])) // Si FILES existe pourle "photo"
{
    $name = "profil-" . time() . "-" . uniqid() . "-" . $_FILES["photo"]["name"];

    $destination = $_SERVER["DOCUMENT_ROOT"] . "/PHP/Th-perf-BDD/images/" . $name;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $destination)) {
        echo "L'image est bien enregistré, voila sa destination : $destination<br>";
    } else {
        echo "Il y a eu une erreur, voila la destination : $destination<br>";
    }
}





?>
</pre>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichiers</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo">

        <input type="submit" value="Valider">
    </form>
</body>

</html>