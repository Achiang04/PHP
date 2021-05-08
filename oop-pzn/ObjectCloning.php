<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "asep";
$student1->value = "100";
$student1->setSample("XXX");

var_dump($student1);

// cara manual kalau ga pake clone
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;

$student2 = clone $student1;
var_dump($student2);

echo "==========================================\n";

/*
__clone() function
ini bukan untuk ngeclone function
tapi ini sama dengan object cloning cmn beda nya kita bisa salin beberapa properties yang kita mau aja

cara kerjanya 
function __clone() akan dipanggil ketika object selesai di duplikasi 
jadi dia awalnya tetap copy semua porperties nya 
baru properties yang mau dihapus bisa di lakukan di function __clone() itu
$student1 => clone $student2 => $student2 => __clone();
*/

$student3 = new Student2();
$student3->id = "1";
$student3->name = "asep";
$student3->value = "100";
$student3->setSample("XXX");

var_dump($student3);

$student4 = clone $student3;
var_dump($student4);