<?php
class Product
{
    public $name;
    public $quantity;

    public function __construct($name, int $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }
    public function getProduct()
    {
        return $this->name . " " . $this->quantity;
    }
    public function sumQuantity(Product $product1, Product $product2)
    {
        $sum = $product1->quantity + $product2->quantity;
        return $sum;
    }
}
$productA = new Product('apple',25);
$productB = new Product('lemon',150);
echo $productA->getProduct()."\n";
echo $productA->quantity + $productB->quantity."\n";
echo $productA->sumQuantity($productA, $productB);
