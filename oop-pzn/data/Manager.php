<?php

class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Mr. MN") {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name){
        echo "hi $name, my name is $this->name im your manager\n";
    }
}

class VicePresident extends Manager {
    public function __construct(string $name = "") {
        // tidak wajib tapi direkomendasikan
       parent::__construct($name, "Mr. VP");
    }

    function sayHello(string $name){
        echo "hi $name, my name is $this->name im your VP\n";
    }
}