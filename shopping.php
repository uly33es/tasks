<?php
class ShopProduct {
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
print "Автор: {$product1->getProduser()}";
?>

