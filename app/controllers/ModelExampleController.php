<?php
namespace App\Controllers;
use App\Models\Product;

/**
 * ModelExampleController class
 *
 * This controller handles the logic for generating and displaying product examples.
 */
class ModelExampleController
{
    /**
     * index method
     *
     * This method generates a set of products and renders the model example view.
     */
    public function index()
    {   
        $products = $this->generateProducts(3);
        
        // Render the model example view
        require_once __DIR__ . '/../views/model-example.php';
    }
    
    /**
     * generateProduct method
     *
     * This method generates a single product with random attributes.
     *
     * @return Product A new product instance with random attributes.
     */
    public function generateProduct()
    {
        $names = array("Spoon", "Knife", "Fork", "Magazine", "Toothpaste", "Food", "Candy", "Shampoo", "Beverage", "Cosmetic", "Hammer");
        $product = new Product(rand(1,1000), array_rand(array_flip($names), 1), mt_rand (1*10, 200*10) / 10);
        $product->quantity = rand(1,20);
        return $product;
    }
    
    /**
     * generateProducts method
     *
     * This method generates a specified number of products.
     *
     * @param int $quantity The number of products to generate.
     * @return array An array of generated products.
     */
    public function generateProducts($quantity)
    {
        $products[] = $this->generateProduct();
        for ($x = 0; $x <= $quantity; $x++) {
            $products[] = $this->generateProduct();
        }
        return $products;
    }
}
