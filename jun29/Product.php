<?php

class Product
{

    const PRODUCT_PREFIX = 'Product';

    private $product_id;
    private $product = [];

    public function __construct(int $id = null)
    {
        $this->product_id = $id;
        $this->setFromDb();
    }

    public static function getList()
    {

    }

    public function setFromDb()
    {
        $this->product = [
            'id' => $this->product_id,
            'title' => 'Knyga',
            'price' => 0.3,
            'prefix' => self::PRODUCT_PREFIX,
        ];
    }

    public function get()
    {
        return $this->product;
    }

    public function getImage()
    {

    }

    public function getPrice()
    {

    }
}

$class = new Product(1);

print_r($class->get());

Product::PRODUCT_PREFIX;






