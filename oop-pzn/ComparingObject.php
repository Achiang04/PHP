
<?php

/*
== equals
=== identity

operator == membandingkan semua properties yang terdapat di obejct tersebut, dan tiap properties juga akan di bandingkan 
menggunkan operator ==
sedangkan operator === maka akan membandingkan apakah object identity, artinya mengacu ke object yang sama dan memory yang sama
*/

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "asep";
$student1->value = "100";

$student2 = new Student();
$student2->id = "1";
$student2->name = "asep";
$student2->value = "100";

var_dump($student1 == $student2);
var_dump($student1 === $student2);