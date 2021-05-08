<?php

/*
$a + $b = untuk gabungkan 2 buah array
$a == $b = true jika $a dan $b memiliki key value sama (ga peduli posisi)
$a === $b = true jika $a dan $b memiliki key value sama dan posisi sama
$a 1= $b = true jika $a dan $b key value tidak sama (ga peduli posisi)
$a 1== $b = true jika $a dan $b key value tidak sama dan posisi tidak sama
 */

 $first = [
     "firstName" => "asep",
 ];

 $last = [
    "firstName" => "asep", // kalau sama dia langsung ignore
    "lastName" => "gila",
 ];

 $full = $first + $last; 
 var_dump($full);

 // utamakan yang awal, misalkan firstName yang ada dilast duluan masuk maka result nya 
 // value ke dua yang luan masuk
 // contoh 
 /*
 $first = [
     "firstName" => "asep",
 ];

 $last = [
    "firstName" => "bambang", 
    "lastName" => "gila",
 ];
 $full = $last + $first; 
 firstName si last "bambang", maka result = bambang gila
 */

 echo "\n===================\n";

 $a = [
     "firstName" => "asep",
     "lastName" => "bambang",
 ];

 $b = [
     "lastName" => "bambang",
    "firstName" => "asep",
 ];

 var_dump($a == $b); // true
 var_dump($a === $b); // false karena beda posisi

 var_dump($a != $b); // false karena isinya sama 
 var_dump($a !== $b); // true karena beda posisi