<?php

class Programmer {
    public string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
}

class BEProgrammer extends Programmer {

}

class FEProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;

}

// function argument

function sayHelloProgammer(Programmer $programmer) {
    /*
    instanceof = bisa untuk ngecek dia itu dari class yang mana
    */
    if ($programmer instanceof BEProgrammer) {
        echo "Hello BE Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FEProgrammer) {
        echo "Hello FE Programmer $programmer->name" . PHP_EOL;
    }  else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
    
}