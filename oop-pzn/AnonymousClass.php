<?php

/*
anonymous adalah kemampuan mendeklarasikan class sekaligus menginstansiasi object nya secara langsung
anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau astract class sederhana, 
tanpa harus membuat implementasi class nya 
*/

interface HelloWorld {
    function sayHello(): void;
}


// case tanpa anonymous class
class SampleHelloWorld implements HelloWorld {
    public function sayHello(): void {
        echo "Hello World\n";
    }
}

$helloWorld = new SampleHelloWorld();
$helloWorld->sayHello();



// case dengan anonymous class
$anonymousHelloWorld = new class implements HelloWorld {
    public function sayHello(): void {
        echo "Hello World With Anonymous Function\n";
    }
};

$anonymousHelloWorld->sayHello();

// case dengan constructor
$anonymousConstructor = new class("Asep") implements HelloWorld {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello(): void {
        echo "Hello $this->name World With Anonymous Function + Constructor\n";
    }
};

$anonymousConstructor->sayHello();