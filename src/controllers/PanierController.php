<?php

class PanierController
{

    public static function panier()
    {
        include VIEWS . "achat/panier.php";
        exit();
    }

    public static function ajouterProduit()
    {
        $panier = new Panier();
        $produitId = $_GET['id'];
        $quantite = '1';
        $panier->ajouterProduit($produitId, $quantite);
        // Redirection ou autre traitement après l'ajout du produit au panier
        include VIEWS . "car/voiture.php";
        exit();
    }

    public static function supprimerProduit()
    {
        $panier = new Panier();
        $produitId = $_GET['id'];
        $panier->supprimerProduit($produitId);
        // Redirection ou autre traitement après la suppression du produit du panier
        include VIEWS . "achat/panier.php";
        exit();
    }

    public static function viderPanier()
    {
        $panier = new Panier();
        $panier->viderPanier();
        // Redirection ou autre traitement après avoir vidé le panier
        include VIEWS . "achat/panier.php";
        exit();
    }

    public static function getQuantiteTotale()
    {
        $quantiteTotale = 0;

        if (isset($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $quantite) {
                $quantiteTotale += $quantite;
            }
        }

        return $quantiteTotale;
    }
}
