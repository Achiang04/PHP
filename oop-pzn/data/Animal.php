<?php

/*
 tidak bleh membuat block function untuk abstract function
 artinya ga boleh ada logic di dalam function tersebut
 abstract function wajib di override di class child
 kalau enggak di override bakal error 
 class abstract tidak bisa membuat object
*/

namespace Data;

abstract class Animal {
    public string $name;

    abstract public function run(): void;
}

class Cat extends Animal {
    public function run(): void {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal {
    public function run(): void {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}


