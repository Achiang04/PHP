<?php

/*
extends = keyword untuk inheritance 
*/

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "asep";
$manager->sayHello("bambang");

$vp = new VicePresident();
$vp->name = "mario";
$vp->sayHello("kambing");