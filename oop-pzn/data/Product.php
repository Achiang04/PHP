<?php

class Product {
    private string $name;
    private int $price;
    protected int $qty;

    public function __construct(string $name, int $price, int $qty) {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }
}

class ProductDummy extends Product {
    public function info() {
        echo "quantity $this->qty" . PHP_EOL;
    }
}