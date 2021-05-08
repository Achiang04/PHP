<?php


require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

/*
covariance memungkinkan kita mengoverride function yang di parent dengan return value yang lebih spesifik
*/



use Data\{AnimalShelter ,CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("asep");
var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("bambang");
var_dump($dog);