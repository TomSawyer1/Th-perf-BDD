<?php
class Panier
{
    public function ajouterProduit($produitId, $quantite)
    {
        $produitId = $_GET['id'];
        $quantite = '1';

        // Vérifier si le produit est déjà dans le panier
        if (isset($_SESSION['panier'][$produitId])) {
            $_SESSION['panier'][$produitId] += $quantite;
        } else {
            $_SESSION['panier'][$produitId] = $quantite;
        }
    }

    public function supprimerProduit($produitId)
    {
        $produitId = $_GET['id'];

        // Vérifier si le produit est dans le panier
        if (isset($_SESSION['panier'][$produitId])) {
            unset($_SESSION['panier'][$produitId]);
        }
    }

    public function getContenu()
    {
        return isset($_SESSION['panier']) ? $_SESSION['panier'] : [];
    }

    public function viderPanier()
    {
        unset($_SESSION['panier']);
    }
}
