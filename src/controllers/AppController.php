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
}
