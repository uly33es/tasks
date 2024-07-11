<?php
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
        $this->price = $price;
        $this->quantity = $quantity;
        $this->weight = $weight;
        $this->name = $name;
        $this->type = $type;
    }
    public function getData(): array
    {
        return [
            'price' => $this->price,
            'name' => $this->name,
            'type' => $this->type
        ];
    }

    public static function getDataFromProducts(array $products): array
    {
        $result = [];
        foreach ($products as $product) {
            if ($product instanceof Product) {
                $result[] = [$product->getData(), 'amount' => 1];
            } elseif (
                is_array($product)
                && ($productObject = $product[array_key_first($product)])
                && $productObject instanceof Product
            ) {
                $result = [$productObject->getData(), 'amount' => $product['amount']];
            }
        }
        return $result;
    }
}

/*
 * Класс Покупатель - Buyer
 */
class Buyer {
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
     * Получение баланс - getBalance0
     */

    /**
     * Добавление товара в корзину.
     *
     * @param Product $product товар.
     *
     * @return void
     */
    public function addingProductToCart(Product $product, int $amount = 1): void
    {
        for ($i = 1; $i <= $amount; $i++) {
            foreach ($this->cart as $key => $cartProductArray) {
                $cartProduct = !is_array($cartProductArray)
                    ?: $cartProductArray[array_key_first($cartProductArray)];
                if (
                    $cartProduct->name === $product->name
                    && isset($this->cart[$key]['amount'])
                ) {
                    $this->cart[$key]['amount'] += 1;
                    return;
                }
            }
            $this->cart[] = [$product, 'amount' => 1];
            return;
        }
    }

    /**
     * @param $balance
     */
    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return bool
     */
    public function buyProductsFromCart(): bool
    {
        if (!empty($this->cart)) {
            foreach ($this->cart as $key => $productArray) {
                $product = $productArray[array_key_first($productArray)];
                if ($this->balance - $product->price >= 0) {
                    if ($product->quantity > 0) {
                        $this->balance -= isset($productArray['amount'])
                            ? $product->price * $productArray['amount']
                            : $productArray->price;
                        $this->buyHistory[] = $productArray;
                        $product->quantity -= 1;
                    } else {
                        echo "Товар $product->name закончился";
                    }
                    unset($this->cart[$key]);
                } else {
                    echo "Недостаточно средств для совершения операции.";
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function historyPurchase(): array
    {
        return Product::getDataFromProducts($this->buyHistory);
    }

    /**
     * @return array
     */
    public function showCart(): array
    {
        return Product::getDataFromProducts($this->cart);
    }

    /**
     * Получить баланс.
     *
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }
}

$carrot = new Product(100, 69, 101, 'Морковь', 'Овощ');
$lemon = new Product(50, 1, 50, 'Лимон', 'Фрукт');
$buyer = new Buyer(502);
echo "Баланс: " . $buyer->getBalance();
$buyer->addingProductToCart($carrot, 2);
echo "<pre>";
echo "Корзина: " . var_dump($buyer->showCart());
var_dump($buyer->buyProductsFromCart());

echo "Баланс: " . $buyer->getBalance();


echo "</pre>";
