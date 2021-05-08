<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use Data\one\{Conflict, Sample, Contoh};
use Data\one\{Conflict as Conflict1, Sample, Contoh}; // alias (as)
use function Helper\{helpMe};

$conflict = new Conflict1();
$sample = new Sample();
$contoh = new Contoh();