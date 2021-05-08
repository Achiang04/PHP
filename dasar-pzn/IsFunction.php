<?php

/*
is_string() = cek data string apa bukan
is_bool()
is_int()
is_float()
is_array()
is_callable()

return nya true/false
*/

$data = "sample";
$data = 100;
$data = 100.0;
$data = null;
$data = [];

var_dump(is_bool($data));
var_dump(is_string($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_callable($data));
var_dump(is_null($data));