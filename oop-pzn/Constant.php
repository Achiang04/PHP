<?php 

require "data/Person.php";

define ("name", "asep");
const umur = 18;

echo name . PHP_EOL;
echo umur . PHP_EOL;

// cara akses constant
// namaClass::namaConstant
echo Person::AUTHOR . PHP_EOL;

