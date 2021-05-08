<?php

require_once "data/Category.php";


$category = new Category();
$category->setName("asep");
// $category->setName(""); 
// ini akan error karena ada validation ga boleh string kosong
// artinya kalau diisi string kosong setName ga akan jalan
// jadi name nya bakal undefined gitu
$category->setExpensive(true);

echo "name {$category->getName()}" . PHP_EOL;
echo "expensive {$category->isExpensive()}" . PHP_EOL;