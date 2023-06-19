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

<div class="catcontainer">

    <?php

    $allCategorie = categorie::showDb();
    $compteur = 0;

    foreach ($allCategorie as $categorie) {
        $compteur++;
    ?>

        <div class="cat-1">
            <div class="loop">


                <h1><?= $categorie['name'] ?></h1>
                <a href="#">
                    <button class="button-cat" type="button">Voir Plus</button>
                </a>
            </div>
            <img src="<?= ROOT . "IMGM3/" . $categorie['image'] ?>" alt="<?= $categorie['name'] ?>">
        </div>


    <?php
        if ($compteur == 6) {
            break;
        }
    }

    ?>

</div>


<?php include VIEWS . 'inc/footer.php'; ?>