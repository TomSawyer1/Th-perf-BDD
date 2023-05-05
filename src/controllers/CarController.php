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

                $car = new car();

                $car->createFromPost($_POST);

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

        //print_r($_FILES);

        if (isset($_FILES["picture"])) // Si FILES existe pourle "picture"
        {
            $name = "profil-" . time() . "-" . uniqid() . "-" . $_FILES["picture"]["name"];

            $destination = $_SERVER["DOCUMENT_ROOT"] . "/PHP/Th-perf-BDD/images/" . $name;

            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $destination)) {
                echo "L'image est bien enregistré, voila sa destination : $destination<br>";
            } else {
                echo "Il y a eu une erreur, voila la destination : $destination<br>";
            }
        }

        include VIEWS . "car/ajoutcar.php";
    }

    public static function tab_car()
    {
        $car = new car();
        $requete = car::showDb("SELECT * FROM `car`");
        $car->showDb($requete);

        include VIEWS . "admin/admincar.php";
    }

    // public static function ajtpic()
    // {
    //     print_r($_FILES);
    //     if (isset($_FILES["photo"])) // Si FILES existe pourle "photo"
    //     {
    //         $name = "profil-" . time() . "-" . uniqid() . "-" . $_FILES["picture"]["name"];

    //         $destination = $_SERVER["DOCUMENT_ROOT"] . "/PHP/Th-perf-BDD/images/" . $name;

    //         if (move_uploaded_file($_FILES["picture"]["tmp_name"], $destination)) {
    //             echo "L'image est bien enregistré, voila sa destination : $destination<br>";
    //         } else {
    //             echo "Il y a eu une erreur, voila la destination : $destination<br>";
    //         }
    //     }
    // }
}
