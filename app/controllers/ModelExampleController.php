<?php
namespace App\Controllers;
use App\Models\Product;

class ModelExampleController
{
    public function index()
    {   
        $products = $this->generateProducts(3);
        
        // render the model example view
        require_once __DIR__ . '/../views/model-example.php';
    }

    public function generateProduct()
    {
        $names = array("Spoon", "Knife", "Fork", "Magazine", "Toothpaste", "Food", "Candy", "Shampoo", "Beverage", "Cosmetic", "Hammer");
        $product = new Product(rand(1,1000), array_rand(array_flip($names), 1), mt_rand (1*10, 200*10) / 10);
        $product->quantity = rand(1,20);
        return $product;
    }
    
    public function generateProducts($quantity)
    {
        $products[] = $this->generateProduct();
        for ($x = 0; $x <= $quantity; $x++) {
            $products[] = $this->generateProduct();
        }
        return $products;
    }
}
