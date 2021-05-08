<?php

namespace Data;

require_once "data/Animal.php";


interface AnimalShelter {
    function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter {
    function adopt (string $name): Dog { // covariance
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

class CatShelter implements AnimalShelter {
    function adopt(string $name): Cat { // covariance
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}