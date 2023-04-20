<?php

class CarController extends Db
{
    public static function ajtcar()
    {
        if (!empty($_POST))                     // Si le formulaire est rempli
        {
            Car::verifyData($_POST);            // On vérifie toutes les infos

            if (empty($_SESSION["message"]))    // Si y'a pas d'erreur
            {
                /*User::insertData();*/
                $car = new car();

                $car->createFromPost($_POST);

                printf($car->getTitle());
                printf($car->getId_cat());

                $car->insertDb();

                if (empty($_SESSION["message"])) {
                    $_SESSION["message"] .= "Ca a marché<br>";
                    header("Location:" . BASE_PATH . "home");
                    exit;
                } else {
                    $_SESSION["message"] .= "Ca a pas marché<br>";
                }
            }
        }

        include VIEWS . "car/ajoutcar.php";
    }
}
