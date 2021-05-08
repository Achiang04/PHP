<?php

/* 
jadi dari pada setiap saat mau pake namespace/function/const
 arus sebutin namespacenya
ada cara singkat yaitu pake 'use' jadi ga perlu terus terusan
mangill namespacenya

use Data\one\Conflict;
use function Helper\helpMe;
use const Helper\TOLONG;
*/

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict;
// use Data\two\Conflict; // ga bisa import nama yang sama  = error
use function Helper\helpMe;
use const Helper\TOLONG;

$conflict1 = new Conflict();
$conflict2 = new Data\two\Conflict(); 
// ini tetap harus manual karena ga di pakein use

helpMe();
echo TOLONG . PHP_EOL;


