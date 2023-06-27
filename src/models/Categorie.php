<?php

class Categorie extends Db
{

    private $id_cat;
    private $name;

    public function createFromPost(array $dataFromPost)
    {
        $this->setName($dataFromPost["name"]);
    }


    public function insertDb()
    {
        $query = "  INSERT INTO `categorie`(`name`) VALUES (?)";


        $requetePreparee = self::getDb()->prepare($query);

        $reponse = $requetePreparee->execute([
            $this->getName()
        ]);

        if (!$reponse) {
            $_SESSION["message"] = "Il y a eu une erreur lors de l'ajout en bdd<br>";
        }
    }


    public static function verifyData()
    {
        if (!empty($_POST)) {
            if (!isset($_POST["name"]) || empty($_POST["name"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le de la Categorie !!!!
				</div>";
            }
        }
    }

    public static function showDb()
    {

        $query = "SELECT * FROM categorie LIMIT 100";

        $requetePreparee = self::getDb()->prepare($query);

        $reponse = $requetePreparee->execute();

        //verifie si la requete s'est bien déroulé
        if (!$reponse) {
            $_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					Quelque chose ne s'est pas déroulé correctement pendant la requete
				</div>";
            return false;
        }

        if ($reponse) {
            $allCats = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
        }

        return $allCats;
    }

    public static function showcar()
    {

        $query = "SELECT * FROM car WHERE `id_cat`='?'";

        $requetePreparee = self::getDb()->prepare($query);

        $reponse = $requetePreparee->execute();

        if ($reponse) {
            $allCar = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
        }
        return $allCar;
    }



    /**
     * Get the value of id_cat
     */
    public function getId_cat()
    {
        return $this->id_cat;
    }

    /**
     * Set the value of id_cat
     *
     * @return  self
     */
    public function setId_cat($id_cat)
    {
        $this->id_cat = $id_cat;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
