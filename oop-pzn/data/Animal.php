<?php

/*
 tidak bleh membuat block function untuk abstract function
 artinya ga boleh ada logic di dalam function tersebut
 abstract function wajib di override di class child
 kalau enggak di override bakal error 
 class abstract tidak bisa membuat object
*/

namespace Data;

require_once "Food.php";

abstract class Animal {
    public string $name;

    abstract public function run(): void;

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal {
    public function run(): void {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood):void {
        echo "cat is eating animalFood\n";
    }    
}

class Dog extends Animal {
    public function run(): void {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void { //contravariance
        echo "dog is eating food\n";
    }
}


