<?php

/*
mengakses field butuh keyword -> setelah nama object dan diikuti nama field nya
*/

require_once "data/Person.php";

$person1 = new Person(); // ini akan error karena udah ada tambahan
$person2 = new Person(); // constructor jadi harus masukin params nya

var_dump($person1);

$person1->name = "asep";
$person1->address = "dumai";
$person1->country = "indo";

var_dump($person1);

echo "name $person1->name\n";
echo "adderss $person1->address\n";
echo "country $person1->country\n";

// $person2->name = null; 
// error karena kalau udah ada 
// type declaration dia ga boleh null
$person2->name = "asep";
// $person2->address = "rupat";
// $person2->country = "singapura";

var_dump($person2);

// error karena efek dari type declaration nya string
// $person2->name = []; 