<?php

class AchatController extends Db
{

    // {
    //     private $cart;

    //     public function __construct()
    //     {
    //         $this->cart = new Cart();
    //     }

    //     public function addItem($product, $quantity)
    //     {
    //         $this->cart->addItem($product, $quantity);
    //     }

    //     public function removeItem($product)
    //     {
    //         $this->cart->removeItem($product);
    //     }

    //     public function getCart()
    //     {
    //         return $this->cart;
    //     }
    // }

    public static function panier()
    {

        include VIEWS . "achat/panier.php";
    }
}
