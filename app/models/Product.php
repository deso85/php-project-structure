<?php
namespace App\Models;

class Product
{

    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getTotal()
    {
        return $this->price * $this->quantity;
    }
    
}
