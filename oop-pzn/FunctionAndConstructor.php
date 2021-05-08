<?php

require_once "data/Person.php";

$person1 = new Person("asep", "dumai");
var_dump($person1);


$person1->sayHi("asep");


$person1->name = "bambang";
$person1->sayHello(null);
$person1->sayHello("asep");

$person1->info();