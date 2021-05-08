<?php

/*
magic function bisa di bilang kayak function bawaan php
contoh __construct(), __desctruct(), __clone(), dan lainnya
ciri ciri nya mungkin bisa di bilang dari function yang di awalai dengan __
 */

 require_once "data/Student.php";

// __toString()
$student3 = new Student2();
$student3->id = "1";
$student3->name = "asep";
$student3->value = "100";
$student3->setSample("XXX");

$string = (string) $student3;
echo $string . PHP_EOL;

echo $student3 . PHP_EOL;


// __invoke()
$student3();
$student3(1, "asep", true);

var_dump($student3);