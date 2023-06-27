<?php

class CarController extends Db
{
    public static function ajtcar()
    {
        if (!empty($_POST))                     // Si le formulaire est rempli
        {
            Car::verifyData();            // On vérifie toutes les infos

            if (empty($_SESSION["message"]))    // Si y'a pas d'erreur
            {

                $car = new Car();

                $car->createFromPost($_POST);

                $car->insertDb();



                if (empty($_SESSION["message"])) {
                    $_SESSION["message"] .= $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
                    La BMW a bien été enregistré !
              </div>";
                    header("Location:" . BASE_PATH . "ajoutcar");
                    exit;
                } else {
                    $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                    La requete ne s'est pas déroulé correctement
              </div>";
                    header("Location:" . BASE_PATH . "ajoutcar");
                    exit;
                }
            }
        }

        //print_r($_FILES);



        include VIEWS . "car/ajoutcar.php";
    }

    public static function tab_car()
    {
        $car = new Car();
        $requete = Car::showDb("SELECT * FROM `car`");
        $car->showDb($requete);

        include VIEWS . "admin/admincar.php";
    }

    public static function removecar()
    {

        $requete = "DELETE FROM `car` WHERE `id_car` = ?";

        $requetePreparee = self::getDb()->prepare($requete);

        $reponse = $requetePreparee->execute([
            $_GET["id"]
        ]);

        if (!$reponse) {
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La requete ne s'est pas déroulé correctement
		</div>";
            header("Location:" . BASE_PATH . "admincar");
            exit;
        }

        if ($requetePreparee->rowCount() == 0) {
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
			  La Voiture que vous essayez de supprimer, n'existe pas !
		</div>";
            header("Location:" . BASE_PATH . "admincar");
            exit;
        }

        if ($requetePreparee->rowCount() == 1) {
            $_SESSION["message"] .= "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
			  Vous avez bien supprimé la voiture dont l'id est " . $_GET["id"] . "
		</div>";
            header("Location:" . BASE_PATH . "admincar");
            exit;
        }




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

    // public static function en_transmission()
    // {
    //     $requete = "SELECT FROM car WHERE transmission IN ('Manual','Automatique')";
    // }

    public static function modifcar()
    {



        include VIEWS . "car/modifiercar.php";
    }

    public static function modifiercar()
    {
        $car = new Car();

        $car->modifierCar();
    }

    public static function voircar()
    {

        include VIEWS . "car/voiture.php";
    }

    public static function listcar()
    {
        // $requete = "SELECT `title`,`picture` FROM `car` WHERE `id_cat` = ?";

        // $requetePreparee = self::getDb()->prepare($requete);

        // $reponse = $requetePreparee->execute([
        //     $_GET["id"]
        // ]);


        // $reponse = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);


        // return $reponse;



        include VIEWS . "car/listcar.php";
    }
}
