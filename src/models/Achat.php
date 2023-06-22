<?php

class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = array();
    }

    public function addItem($product, $quantity)
    {
        if (isset($this->items[$product])) {
            $this->items[$product] += $quantity;
        } else {
            $this->items[$product] = $quantity;
        }
    }

    public function removeItem($product)
    {
        if (isset($this->items[$product])) {
            unset($this->items[$product]);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotalItems()
    {
        return count($this->items);
    }

    public function getTotalQuantity()
    {
        return array_sum($this->items);
    }
}
