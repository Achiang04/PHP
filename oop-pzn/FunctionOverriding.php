<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "asep";
$manager->sayHello("ucup");

$vp = new VicePresident();
$vp->name = "bambang";
$vp->sayHello("mario");