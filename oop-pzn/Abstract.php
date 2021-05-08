<?php

/*
abstract = tidak bisa dibuat object secara langsung
hanya bisa diturunkan
cara pakai nya dengan tambahkan 'abstract' sebelum kata kunci class
*/

require_once "data/City.php";

use Data\{Location, City, Country, Province};

// $location = new Location(); 
// error karena ini abstract jadi ga bisa langusng buat object
$city = new City();
$country = new Country();
$province = new Province();