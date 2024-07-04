<?php
namespace App\Models;

/**
 * Product class
 *
 * This class represents a product with an ID, name, price, and quantity.
 */
class Product
{
    // Public properties for product details
    public $id;
    public $name;
    public $price;
    public $quantity;
    
    /**
     * Constructor method
     *
     * Initializes the product with an ID, name, and price.
     *
     * @param int $id The unique identifier for the product.
     * @param string $name The name of the product.
     * @param float $price The price of the product.
     */
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
    /**
     * getTotal method
     *
     * Calculates the total cost based on the price and quantity of the product.
     *
     * @return float The total cost for the product.
     */
    public function getTotal()
    {
        return $this->price * $this->quantity;
    }
}
