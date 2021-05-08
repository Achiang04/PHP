
<?php

/*
as = membuat nama lain dari class / alias
jadi mislakan untuk atasi kasus line 18
ga bisa import nama yang sama maka bisa dipakein alias
agar nama yang sama bisa jalan dan ga error
*/

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\TOLONG as tolong;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo tolong . PHP_EOL;