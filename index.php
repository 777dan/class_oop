<?php
class products
{
    private $name;
    private $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_price()
    {
        return $this->price;
    }
}
$products_arr = [
    $chair = new products("Стул", "100 грн"),
    $table = new products("Стол", "300 грн"),
    $amchair = new products("Кресло", "200 грн")
];
foreach ($products_arr as $product_name) {
    echo "Название товара: {$product_name->get_name()}\nЦена товара: {$product_name->get_price()}\n\n";
}
