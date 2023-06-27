<?php
//que pour l'index
class AppController extends Db
{

    public static function index()
    {

        include VIEWS . "app/home.php";
    }
    public static function tab_user()
    {

        include VIEWS . "admin/admin.php";
    }

    public static function enregistrement()
    {
        $first_name = strtolower(htmlspecialchars($_POST["first_name"]));
        $last_name = strtolower(htmlspecialchars($_POST["last_name"]));
        $mail = strtolower(htmlspecialchars($_POST["mail"]));
        $password = strtolower(htmlspecialchars($_POST["password"]));
        $address = strtolower(htmlspecialchars($_POST["address"]));

        $query = "UPDATE `user` SET `first_name`=?,`last_name`=?,`mail`=?,`password`=?,`address`=? WHERE `id_user`=?";

        $requetePrepare = self::getdb()->prepare($query);

        $reponse = $requetePrepare->execute([
            $first_name,
            $last_name,
            $mail,
            $password,
            $address,
            $_GET["id"]
        ]);
        if ($reponse) {
            $_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
                  Bravo votre utilisateur qui porte le nom " . $first_name . " a bien été mis à jour !
            </div>";
            header("Location:" . BASE_PATH . "administration");
            exit;
        } else {
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                  ALERTE ! Il y a eu une erreur lors de la modification de l'utilisateur !
            </div>";
            header("Location:" . BASE_PATH . "administration");
            exit;
        }
    }

    /* public static function modifcar()
    {
        $title = strtolower(htmlspecialchars($_POST["title"]));
        $description = strtolower(htmlspecialchars($_POST["description"]));
        $transmission = strtolower(htmlspecialchars($_POST["transmission"]));
        $price = strtolower(htmlspecialchars($_POST["price"]));
        $miles = strtolower(htmlspecialchars($_POST["miles"]));
        $power = strtolower(htmlspecialchars($_POST["power"]));
        $fuel = strtolower(htmlspecialchars($_POST["fuel"]));
        $creation_year = strtolower(htmlspecialchars($_POST["creation_year"]));

        $query = "UPDATE `car` SET `power`=?,`miles`=?,`fuel`=?,`creation_year`=?,`title`=?,`description`=?,`price`=?,`transmission`=? WHERE `id_car` = ?";

        $requetePrepare = self::getDb()->prepare($query);
        $reponse = $requetePrepare->execute([
            $power,
            $miles,
            $fuel,
            $creation_year,
            $title,
            $description,
            $price,
            $transmission,
            $_GET["id"]
        ]);

        if ($reponse) {
            $_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
                  Bravo votre voiture qui porte le nom " . $title . " a bien été mis à jour !
            </div>";
            header("Location:" . BASE_PATH . "admincar");
            exit;
        } else {
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                  ALERTE ! Il y a eu une erreur lors de la modification de la voiture!
            </div>";
            header("Location:" . BASE_PATH . "modifiercar");
            exit;
        }
    }*/

    public static function connexion()
    {


        $query = "SELECT `id_user`, `first_name`, `last_name`, `mail`, `password`, `address`, `data_creation`, `statut` FROM `user`  WHERE `mail` = ? AND `password` = ?";

        $requetePreparee = self::getDb()->prepare($query);

        $reponse = $requetePreparee->execute([
            $_POST["mail"],
            $_POST["password"]
        ]);
        // tableau associatif d'element :
        $Users_connecte = $requetePreparee->fetch(PDO::FETCH_ASSOC);


        //verifie si la requete s'est bien déroulé
        if (!$reponse) {
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
                     Erreur au niveau de la requete SQL !
               </div>";
        }

        // si authentification reussi
        if ($requetePreparee->rowCount() == 1) {
            $_SESSION['user'] = $Users_connecte;
            header("Location:" . BASE_PATH . "connexion");
            $_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
            Bonjour" . $_SESSION['user']['first_name'] . "</div>";

            // echo($_SESSION['user']['nom']);
        }

        // erreur authentification
        if ($requetePreparee->rowCount() == 0) {
            header("Location:" . BASE_PATH . "connexion");
            $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
            Erreur d'authentification ! veuillez réssayer
      </div>";
        }





        //     if ($requetePreparee->rowCount() == 1) {

        //         $_SESSION['email'] = $login;
        //         $_SESSION['mdp'] = $mdp;

        //         $authOK = true;
        //         header("Location:" . BASE_PATH . "");

        //         }else{
        //         $authOK = false;
        //         $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
        //         Erreur d'authentification ! veuillez réssayer
        //   </div>";
        //   header("Location:" . BASE_PATH . "connection");
        //   exit;
        //     }
    }

    public static function isconnect()
    {
        if ($authOK = 'false') {
            return false;
        } else {
            return true;
        }
    }

    public static function actionPage()
    {
        // Récupération de l'URL actuelle
        $currentUrl = $_SERVER['REQUEST_URI'];

        // Extraction des informations pour le fil d'Ariane à partir du modèle
        $breadcrumbData = App::getBreadcrumbData($currentUrl);
        // Passer les données à la vue
    }
}
