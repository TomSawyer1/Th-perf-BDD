<?php

class car extends Db
{
    private $id_car;
    private $color;
    private $miles;
    private $price;
    private $creation_year;
    private $nb_door;
    private $power;
    private $fuel;
    private $title;
    private $description;
    //private $picture;
    private $id_cat;

    public function createFromPost(array $dataFromPost)
    {
        $this->id_cat = $dataFromPost['model'];
        $this->color = $dataFromPost['color'];
        $this->miles = $dataFromPost['miles'];
        $this->price = $dataFromPost['price'];
        $this->creation_year = $dataFromPost['creation_year'];
        $this->nb_door = $dataFromPost['nb_door'];
        $this->power = $dataFromPost['power'];
        $this->fuel = $dataFromPost['fuel'];
        $this->title = $dataFromPost['title'];
        $this->description = $dataFromPost['description'];
        //$this->picture = $dataFromPost['picture'];
    }

    public function insertDb()
    {

        $query = "INSERT INTO car (`id_cat`,`color`, `miles`, `nb_door`, `power`, `fuel`, `creation_year`, `title`, `description`, `price`) 
        VALUES (?,?,?,?,?,?,?,?,?,?)";

        $requetePreparee = self::getDb()->prepare($query);

        $reponse = $requetePreparee->execute([

            $this->getId_cat(),
            $this->getColor(),
            $this->getMiles(),
            $this->getNb_door(),
            $this->getPower(),
            $this->getFuel(),
            $this->getCreation_year(),
            $this->getTitle(),
            $this->getDescription(),
            $this->getPrice()
            //$this->getPicture()
        ]);

        if (!$reponse) {
            printf($reponse);
            $_SESSION["message"] = "Il y a eu une erreur lors de l'ajout en bdd<br>";
        }
    }

    public static function verifyData()
    {

        if (!empty($_POST)) {


            if (!isset($_POST["model"]) || empty($_POST["model"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le Model !
				</div>";
            }


            if (!isset($_POST["color"]) || empty($_POST["color"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le Color !
				</div>";
            }

            if (!isset($_POST["miles"]) || empty($_POST["miles"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le kilometrage !
				</div>";
            }

            if (!isset($_POST["nb_door"]) || empty($_POST["nb_door"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le Nombre de porte !
				</div>";
            }

            if (!isset($_POST["power"]) || empty($_POST["power"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le champ Power !
				</div>";
            }

            if (!isset($_POST["fuel"]) || empty($_POST["fuel"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le champ fuel!
				</div>";
            }

            if (!isset($_POST["creation_year"]) || empty($_POST["creation_year"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le champ date de création !
				</div>";
            }

            if (!isset($_POST["title"]) || empty($_POST["title"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le Titre !
				</div>";
            }

            if (!isset($_POST["description"]) || empty($_POST["description"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le champ description !
				</div>";
            }

            if (!isset($_POST["price"]) || empty($_POST["price"])) {
                $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le prix !
				</div>";
            }

            // if (!isset($_POST["picture"]) || empty($_POST["picture"])) {
            //     $_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
            // 	Veuillez choisir une photo !
            // 	</div>";
            // }
        }
    }

    /**
     * Get the value of id_car
     */
    public function getId_car()
    {
        return $this->id_car;
    }

    /**
     * Set the value of id_car
     *
     * @return  self
     */
    public function setId_car($id_car)
    {
        $this->id_car = $id_car;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of kilometrage
     */
    public function getMiles()
    {
        return $this->miles;
    }

    /**
     * Set the value of kilometrage
     *
     * @return  self
     */
    public function setMiles($miles)
    {
        $this->miles = $miles;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of creation_year
     */
    public function getCreation_year()
    {
        return $this->creation_year;
    }

    /**
     * Set the value of creation_year
     *
     * @return  self
     */
    public function setCreation_year($creation_year)
    {
        $this->creation_year = $creation_year;

        return $this;
    }

    /**
     * Get the value of nb_door
     */
    public function getNb_door()
    {
        return $this->nb_door;
    }

    /**
     * Set the value of nb_door
     *
     * @return  self
     */
    public function setNb_door($nb_door)
    {
        $this->nb_door = $nb_door;

        return $this;
    }

    /**
     * Get the value of power
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set the value of power
     *
     * @return  self
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get the value of fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set the value of fuel
     *
     * @return  self
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    // /**
    //  * Get the value of picture
    //  */
    // public function getPicture()
    // {
    //     return $this->picture;
    // }

    // /**
    //  * Set the value of picture
    //  *
    //  * @return  self
    //  */
    // public function setPicture($picture)
    // {
    //     $this->picture = $picture;

    //     return $this;
    // }

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
}
