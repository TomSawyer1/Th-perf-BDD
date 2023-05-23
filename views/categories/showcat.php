<?php include VIEWS . 'inc/header.php'; ?>

<h1 class="text-center my-5">Categorie</h1>

<table class="table table-striped container">

    <thead>
        <tr>
            <th scope="col">Nom</th>

        </tr>
    </thead>

    <tbody class="table-striped">
        <?php

        $allCategorie = categorie::showDb();
        foreach ($allCategorie as $categorie) {
        ?>
            <tr>
                <td><?= $categorie["name"] ?></td>
                <td>

                    <a class="btn btn-success" href="listcar?id=<?= $categorie["id_cat"] ?>">Voir Plus</a>

                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include VIEWS . 'inc/footer.php'; ?>