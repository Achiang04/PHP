<?php

/*
implode()/join() = menggabungkan array menjadi string
explode() = memecah string menjadi array
substr() = mengambil string berdasarkan index
trim() = mengahapus whitespace
*/

var_dump(join(",", [1,2,3,4,5]));
var_dump(explode(" ", "asep orang gila"));
var_dump(strtolower("ASEP ORANG GILA"));
var_dump(strtoupper("asep orang gila"));
var_dump(trim("              ASEP             "));
var_dump(substr("ASEP ORANG GILA", 0, 3));