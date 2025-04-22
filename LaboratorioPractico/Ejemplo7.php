<?php
    class Product {
        public $name;
        public $price;

        public function __construct($name, $price){
            $this -> name = $name;
            $this -> price = $price;
        }
    }

    $products = [
        new Product("Laptop", 800),
        new Product("Smartphone", 400),
        new Product("Tablet", 300),
    ];

    foreach ($products as $product){
        echo "Product: " . $product->name . ", Price: $" . $product->price . "<br>";
    }
?>