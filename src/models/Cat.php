<?php

class cat extends Db
{

    private $id_cat;
    private $name;

    public function createFromPost(array $dataFromPost)
    {
        $this->setName($dataFromPost["name"]);
    }


    public function insertDb()
    {
        $query = "INSERT INTO `categorie`(`name`) VALUES (?)";


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
