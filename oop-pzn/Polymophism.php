<?php

/*
polymorphism = bisa merubah bentuk object 
tapi hanya terbatas ke object turunannya
*/

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("ucup");
var_dump($company);
$company->programmer = new BEProgrammer("ucup");
var_dump($company);
$company->programmer = new FEProgrammer("ucup");
var_dump($company);


sayHelloProgammer(new Programmer("ucup"));
sayHelloProgammer(new BEProgrammer("ucup"));
sayHelloProgammer(new FEProgrammer("ucup"));