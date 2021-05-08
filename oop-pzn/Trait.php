<?php

/*
trait: mirip sama dengan abstract
bisa buat function biasa dan abstract function

bisa memasukkan lebih dari 1 trait dalam 1 class

trait digunakan untuk menyimpan function function yang bisa di gunakan
ulang dalam beberapa class jadi agak mirip dengan redux

cara pakai trait di dalam class, bisa dipanggil dengan 
keyword "use"

intinya trait ini dia itu kayak extension
apapun field/properties dan function yang ada di dalam trait
bakal di inlcude kan juga ke dalam class itu 
jadi field/properties sama funciton nya bisa dipake
 */

 require_once "data/SayGoodBye.php";

 use Data\Traits\{Person, SayGoodBye, SayHello, HasName, CanRun};

$person = new Person();
$person->goodBye("Asep");
$person->hello("Asep");

$person->name = "asep";
var_dump($person);

$person->run();