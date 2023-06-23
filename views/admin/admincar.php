<?php
$page = "other";
include VIEWS . 'inc/header.php';

if (!App::isconnect()) {
    header("Location:" . BASE_PATH . "");
}

?>

<h1 class="text-center my-5">Liste des Voitures </h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

/*$_SESSION["message"] = "";*/
?>

<table class="table table-striped container">

    <thead>
        <tr>

            <th scope="col">id_car</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
            <th scope="col">Color</th>
            <th scope="col">Miles</th>
            <th scope="col">Power</th>
            <th scope="col">Fuel</th>
            <th scope="col">Creation Year</th>
            <th scope="col">N° Door</th>
            <th scope="col">Picture</th>
            <th scope="col">Transmission</th>

        </tr>
    </thead>

    <tbody class="table-striped">
        <?php

        $allCars = car::showDb();
        foreach ($allCars as $car) {

        ?>
            <tr>

                <td><?= $car["id_car"] ?></td>
                <td><?= $car["title"] ?></td>
                <td><?= $car["description"] ?></td>
                <td><?= $car["id_cat"] ?></td>
                <td><?= $car["price"] ?></td>
                <td><?= $car["color"] ?></td>
                <td><?= $car["miles"] ?></td>
                <td><?= $car["power"] ?></td>
                <td><?= $car["fuel"] ?></td>
                <td><?= $car["creation_year"] ?></td>
                <td><?= $car["nb_door"] ?></td>
                <td><img src=" <?= IMAGES . $car["picture"] ?> " alt="voiture"> </td>
                <td><?= $car["transmission"] ?></td>

                <?php
                if (App::isadmin()) {
                    // header("Location:" . BASE_PATH . ""); 
                ?>

                    <td>
                        <a href="suppcar?id=<?= $car["id_car"] ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                    <td>
                        <a href="modifiercar?id=<?= $car["id_car"] ?>" class="btn btn-primary">Modifier</a>
                    </td><?php
                        }
                            ?>
                <td>
                    <a href="voircar?id=<?= $car["id_car"] ?>" class="btn btn-success">Voir</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include VIEWS . 'inc/footer.php'; ?>