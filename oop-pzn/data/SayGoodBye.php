<?php

/*
konsep overriding trait
jika sebuah class memiliki parent class yang memiliki function
yang sama dengan function id trait maka secara otomattis
trait akan mengoverride function tersebut
namun jika kita membuat function yang sama di classnya,
maka secara otomatis kita kaan mengoverride function di trait
sehinggap posisinya seperti ini
parent class override by trait
trait override by childclass
*/

namespace Data\Traits;

trait SayGoodBye {
    public function goodBye(?string $name): void{
        if (is_null($name)) {
            echo "Good Bye you\n";
        } else {
            echo "Good Bye $name\n";
        }
    }
}

trait SayHello {
    public function hello(?string $name): void{
        if (is_null($name)) {
            echo "Hello you \n";
        } else {
            echo "Hello  $name\n";
        }
    }
}

trait CanRun {
    public abstract function run(): void;
}

trait HasName {
    public string $name;
}

class ParentClass {
    // kalau disini parent yang di override sama trait
    //  function goodBye(?string $name): void {
    //     echo "override trait SayGoodBye\n";
    // }

    // function hello (?string $name): void {
    //     echo "overidde trait sayHello\n";
    // }
}

trait All {
    use SayGoodBye, sayHello, HasName, CanRun {
        // trait visibility override
        // kalau ini akan buat function yang tadinya
        // public jadi private
        // dan ga bisa diakses dari luar
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentClass {
   use All; // trait inheritance

    public function run(): void {
        echo "person $this->name is running\n";
    }

    // kalau di child traitnya yang di override
    // function goodBye(?string $name): void {
    //     echo "override trait SayGoodBye\n";
    // }

    // function hello (?string $name): void {
    //     echo "overidde trait sayHello\n";
    // }
}

