<?php

class CatController extends Db
{

    public static function ajtcat()
    {
        if (!empty($_POST))                     // Si le formulaire est rempli
        {
            Cat::verifyData($_POST);            // On vérifie toutes les infos

            if (empty($_SESSION["message"]))    // Si y'a pas d'erreur
            {
                /*User::insertData();*/
                $cat = new cat();

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
}
