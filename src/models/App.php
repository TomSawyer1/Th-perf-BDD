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

			'Connexion' => 'connexion',
			'Inscription' => 'register_form',

			'Profil' => 'profil',
			// 'BMW M' => 'voiture',
			'Ajouter un véhicule' => 'ajoutcar'
		);
		if (isset($_GET['cat'])) {
			$pages['Liste voitures'] = 'listcar?id=' . $_GET['cat'];
			$pages['BMW M'] = ' ';
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
