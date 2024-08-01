<?php
/*class ShopProduct {
    public $title = "Стандартный товар";
    public $produserMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    function  __construct ($title, $firstName, $mainName, $price) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->produserMainName = $mainName;
        $this->price = $price;
    }
    function getProduser() {
        return "{$this->producerFirstName} "
            ."{$this->produserMainName}";
    }
}
//$product1 = new ShopProduct();
//$product2 = new ShopProduct();
//$product3 = new ShopProduct();
//$product1->title = "XYUUU";
//$product2->title = "SANINA";
//print $product1 ->title;
//print $product2->title;
//Дополнительный параметр
//$product3->arbitraryAddition = "Дополнительный параметр";
//$product1->title = "Собачье сердце";
//$product1->produserMainName = "Булгаков";
//$product1->producerFirstName = "Михаил";
//$product1->price = 100;
//print "Автор: $product1->producerFirstName "
//    ."$product1->produserMainName\n";

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 500);
print "Автор: {$product1->getProduser()}";*/


/*
 * Класс товар - Product
 */
class Product {
    /*
     * Объявление свойтсва
     * Цена - $price
     * Кол-во - $quantity
     * Вес - $weight
     * Наименование - $name
     * Тип товара - $type
     */
    public $price;
    public $quantity;
    public $weight;
    public $name;
    public $type;

    public function __construct($price, $quantity, $weight, $name, $type)
    {
        $this -> price = $price;
        $this -> quantity = $quantity;
        $this -> weight = $weight;
        $this -> name = $name;
        $this -> type = $type;
    }
    /*
     *getInfo
     */
    public function getInfo() : array
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'type' => $this->type
        ];
    }

}

/*
 * Класс Покупатель - Buyer
 */
class Buyer extends Product
{
    /*
     * Объявление свойтсва
     * Баланс - $balance
     * Текущая корзина - $cart
     * История купленных товаров - $story
     */
    private float $balance;
    public array $cart = [];
    private array $buyHistory = [];
    /*
     * Объявление метода
     * Добавление товара в корзину - addingProduct
     * Покупка товара из корзины - buyProduct
     * Получение истории покупок - historyPurchase
     * Получение баланс - getBalance
     *
     */
    public function __construct($balance)
    {
        $this -> balance = $balance;
    }

    public function addingProduct ()
    {
        if ($this->quantity > 0){

        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$Byer1 = new Buyer(10);
//echo $Byer1->getBalance();
$user = new Product(100,2,50, "яблоко", "фрукт");
echo $user->getInfo();
?>

