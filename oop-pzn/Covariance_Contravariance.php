<?php


require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

/*
covariance memungkinkan kita mengoverride function yang di parent dengan return value yang lebih spesifik
contravariance memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dibandingkan parentnya
*/

use Data\{AnimalShelter ,CatShelter, DogShelter, Food, AnimalFood};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("asep"); // covariance
$cat->eat(new AnimalFood()); // contravariance
var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("bambang"); // covariance
$dog->eat(new Food()); // contravariance
var_dump($dog);