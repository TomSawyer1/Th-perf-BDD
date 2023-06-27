<?php

class CatController extends Db
{

    public static function addCategorie()
    {
        if (!empty($_POST))                     // Si le formulaire est rempli
        {
            Categorie::verifyData($_POST);            // On vérifie toutes les infos

            if (empty($_SESSION["message"]))    // Si y'a pas d'erreur
            {
                /*User::insertData();*/
                $cat = new categorie();

                $cat->createFromPost($_POST);

                $cat->insertDb();

                if (empty($_SESSION["message"])) {
                    $_SESSION["message"] .= "Ca a marché<br>";
                    header("Location:" . BASE_PATH . "home");
                    exit;
                } else {
                    $_SESSION["message"] .= "Ca a pas marché<br>";
                }
            }
        }

        include VIEWS . "categories/ajoutcat.php";
    }

    public static function tab_cat()
    {
        $categorie = new Categorie();
        $requete = Categorie::showDb("SELECT * FROM `categorie`");
        $categorie->showDb($requete);

        include VIEWS . "admin/admincat.php";
    }
    public static function cat()
    {

        $categorie = new Categorie();
        $requete = Categorie::showDb("SELECT * FROM `categorie`");
        $categorie->showDb($requete);

        include VIEWS . "categories/showcat.php";
    }

    public static function removecat()
    {

        $requete = "DELETE FROM `categorie` WHERE `id_cat` = ?";

        $requetePreparee = self::getDb()->prepare($requete);

        $reponse = $requetePreparee->execute([
            $_GET["id_cat"]
        ]);

        if (!$reponse) {
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La requete ne s'est pas déroulé correctement
		</div>";
            header("Location:" . BASE_PATH . "admincat");
            exit;
        }

        if ($requetePreparee->rowCount() == 0) {
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La Catégorie que vous essayez de supprimer, n'existe pas !
		</div>";
            header("Location:" . BASE_PATH . "admincat");
            exit;
        }

        if ($requetePreparee->rowCount() == 1) {
            $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
			  Vous avez bien supprimé la catégorie dont l'id est " . $_GET["id_cat"] . "
		</div>";
            header("Location:" . BASE_PATH . "admincat");
            exit;
        }




        include VIEWS . "admin/admincat.php";
    }

    public static function fetchAllCategorie()
    {
        $categorie = new categorie();
        $allCategorie = $categorie->showDb();
        return $allCategorie;
    }
}
