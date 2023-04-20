<?php include VIEWS . 'inc/header.php'; ?>

<h1 class="text-center my-5">Liste des Catégories </h1>
<?= isset($_SESSION["message"]) ? $_SESSION["message"] : "";

/*$_SESSION["message"] = "";*/
?>

<table class="table table-striped container">

    <thead>
        <tr>

            <th scope="col">id_cat</th>
            <th scope="col">Nom</th>

        </tr>
    </thead>

    <tbody class="table-striped">
        <?php

        $allCategorie = categorie::showDb();
        foreach ($allCategorie as $categorie) {

        ?>
            <tr>
                <td><?= $categorie["id_cat"] ?></td>
                <td><?= $categorie["name"] ?></td>
                <td>
                    <a href="supprimer?id=<?= $categorie["id_cat"] ?>" class="btn btn-danger">Supprimer</a>
                </td>
                <td>
                    <a href="modifier?id=<?= $categorie["id_cat"] ?>" class="btn btn-primary">Modifier</a>

                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include VIEWS . 'inc/footer.php'; ?>