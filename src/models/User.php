<?php

class user extends Db
{
	private $id_user;
	private $first_name;
	private $last_name;
	private $mail;
	private $password;
	private $address;
	private $date_creation;
	private $statut;


	public function createFromPost(array $dataFromPost)
	{
		$this->setFirstName($dataFromPost["first_name"]);
		$this->setLastName($dataFromPost["last_name"]);
		$this->setMail($dataFromPost["mail"]);
		$this->setPassword($dataFromPost["password"]);
		$this->setAddress($dataFromPost["address"]);
		$this->setStatut(0);
	}

	public function insertDb()
	{
		$query = "INSERT INTO user (`first_name`,`last_name`,`mail`,`password`,`address`,`statut`) VALUES (?,?,?,?,?,?)";

		$requetePreparee = self::getDb()->prepare($query);

		$reponse = $requetePreparee->execute([
			$this->getFirstName(),
			$this->getLastName(),
			$this->getMail(),
			$this->getPassword(),
			$this->getAddress(),
			$this->getStatut()
		]);

		if (!$reponse) {
			$_SESSION["message"] = "Il y a eu une erreur lors de l'ajout en bdd<br>";
		}
	}
	public static function verifyData()
	{
		if (!empty($_POST)) {

			if (!isset($_POST["first_name"]) || empty($_POST["first_name"])) {
				$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				Veuillez remplir le Prenom !
				</div>";
			}

			if (!isset($_POST["last_name"]) || empty($_POST["last_name"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir le nom !
				</div>";
			}

			if (!isset($_POST["mail"]) || empty($_POST["mail"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre email !
				</div>";
			}

			if (!isset($_POST["password"]) || empty($_POST["password"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre mot de passe !
				</div>";
			}

			if (!isset($_POST["address"]) || empty($_POST["address"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre address !
				</div>";
			}
		}
	}
	public static function showDb()
	{

		$query = "SELECT * FROM user LIMIT 100";

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
			$allUsers = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
		}

		return $allUsers;
	}

	/*public function connexionDb(){ 
	$query="SELECT * FROM `user` WHERE `mail`=? AND `password`=?";

	$requetePreparee = self::getDb()->prepare($query);
	
	$reponse = $requetePreparee->execute([
		$this->getMail(),
		$this->getPassword()
]);
	// tableau associatif d'element :
	$Users_connecte = $requetePreparee->fetch(PDO::FETCH_ASSOC);
	

	//verifie si la requete s'est bien déroulé
	if (!$reponse)
	{
		$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
				 Erreur au niveau de la requete SQL !
		   </div>";
	}

	// si authentification reussi
	if ($requetePreparee->rowCount() == 1)
	{
		$_SESSION['user']= $Users_connecte;
		header("Location:" . BASE_PATH . "connexion");
		$_SESSION["message"] = "<div class=\"alert alert-success w-50 mx-auto\" role=\"alert\">
		Bonjour " .$_SESSION['user']['prenom']. "</div>";

	}

   // erreur authentification
	if ($requetePreparee->rowCount() == 0) {
		header("Location:" . BASE_PATH . "connexion");
		$_SESSION["message"] = "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
		Erreur d'authentification ! veuillez réssayer
  </div>";


}
}*/

	public static function getUser($mail, $password)
	{
		//$requete = "SELECT first_name, last_name , statut FROM user WHERE mail = ? AND password = ?";
		$requete = "SELECT * FROM user WHERE mail = ? AND password = ?";
		$requetePreparee = self::getDb()->prepare($requete);
		$reponse = $requetePreparee->execute([$mail, $password]);

		if (!$reponse) {
			$_SESSION["message"] = "
	   Désolé, veuillez revoir vos informations de connexion </div>";
			return false;
		} else {
			$result = $requetePreparee->fetch();
			return $result;
		}
	}

	public static function modifier()
	{

		$query = "SELECT `id_user`, `first_name`, `last_name`, `mail`, `password`, `address`, `data_creation`, `statut` FROM `user` WHERE `id_user` = ?";

		$requetePreparee = self::getDb()->prepare($query);

		$reponse = $requetePreparee->execute([

			$_GET["id"]

		]);

		$userFromBdd = $requetePreparee->fetch(PDO::FETCH_ASSOC);
		return $userFromBdd;
	}

	public static function verifConnexion()
	{
		if (!empty($_POST)) {


			if (!isset($_POST["mail"]) || empty($_POST["mail"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre email !
				</div>";
			}

			if (!isset($_POST["password"]) || empty($_POST["password"])) {
				$_SESSION["message"] .= "<div class=\"alert alert-danger w-50 mx-auto\" role=\"alert\">
					  Veuillez remplir votre mot de passe !
				</div>";
			}
		}
	}



	/**
	 * Get the value of id_user
	 */
	public function getIdUser()
	{
		return $this->id_user;
	}

	/**
	 * Set the value of id_user
	 */
	public function setIdUser($id_user): self
	{
		$this->id_user = $id_user;

		return $this;
	}

	/**
	 * Get the value of first_name
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * Set the value of first_name
	 */
	public function setFirstName($first_name): self
	{
		$this->first_name = $first_name;

		return $this;
	}

	/**
	 * Get the value of last_name
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * Set the value of last_name
	 */
	public function setLastName($last_name): self
	{
		$this->last_name = $last_name;

		return $this;
	}

	/**
	 * Get the value of mail
	 */
	public function getMail()
	{
		return $this->mail;
	}

	/**
	 * Set the value of mail
	 */
	public function setMail($mail): self
	{
		$this->mail = $mail;

		return $this;
	}

	/**
	 * Get the value of password
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * Set the value of password
	 */
	public function setPassword($password): self
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Get the value of address
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Set the value of address
	 */
	public function setAddress($address): self
	{
		$this->address = $address;

		return $this;
	}

	/**
	 * Get the value of date_creation
	 */
	public function getDateCreation()
	{
		return $this->date_creation;
	}

	/**
	 * Set the value of date_creation
	 */
	public function setDateCreation($date_creation): self
	{
		$this->date_creation = $date_creation;

		return $this;
	}

	/**
	 * Get the value of statut
	 */
	public function getStatut()
	{
		return $this->statut;
	}

	/**
	 * Set the value of statut
	 */
	public function setStatut($statut): self
	{
		$this->statut = $statut;

		return $this;
	}
}
