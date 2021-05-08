<?php

/*
var = mirip dengan public
secara default dia public
public
protected
private
*/

require_once "data/Product.php";

$product = new Product("asep", 10000, 3);

// error karena ini private
// $product->name = "asep";
// $product->price = 1000;
// echo $product->name;
// echo $product->price;


echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;


$productDummy = new ProductDummy("ucup", 2000, 1);
$productDummy->info();
