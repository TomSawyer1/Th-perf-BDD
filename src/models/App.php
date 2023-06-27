<?php

class App
{
	public static function showArray(array $list): void
	{
		echo "<pre>";
		print_r($list);
		echo "</pre>";
	}

	public static function isconnect()
	{
		if (!empty($_SESSION['user'])) {
			return true;
		} else {
			return false;
		}
	}

	public static function isadmin()
	{
		if ($_SESSION['user']['statut'] == 1) {
			return true;
		} else {
			return false;
		}
	}

	public static function getBreadcrumbData($currentUrl)
	{
		// Tableau multidimensionnel contenant les informations des pages

		$pages = array(
			'Home' => '&nbsp;',
			'Catégorie' => 'showcat',
			'Liste voitures' => 'listcar',
			'BMW M' => 'voiture',

			'Connexion' => 'connexion',
			'Inscription' => 'register_form',

			'Profil' => 'profil',

			'Ajouter un véhicule' => 'ajoutcar',

			'Panier' => 'panier'
		);
		if (isset($_GET['cat'])) {
			$pages['Liste voitures'] = 'listcar?id=' . $_GET['cat'];
			$pages['Panier'] = 'panier';
		}


		// Vérification de correspondance et construction du fil d'Ariane
		$breadcrumb = array();
		foreach ($pages as $title => $url) {
			if ($url == $currentUrl) {
				$breadcrumb[$title] = '#';
				break;
			} else {
				$breadcrumb[$title] = $url;
			}
		}

		return $breadcrumb;
	}
}
