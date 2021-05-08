<?php

/*
trait conflict
ketika di 2 trait terdapat function yang sama 
maka akan terjadi trait conflit
*/


trait A {
    function doA(): void {
        echo "a\n";
    }
    function doB(): void {
        echo "b\n";
    }
}

trait B {
    function doA(): void {
        echo "A\n";
    }
    function doB(): void {
        echo "B\n";
    }
}

class Sample {
    use A,B {
        A::doA insteadOf B;
        // artinya ini untuk function doA dia bakal ambil dari trait A daripada B
        B::doB insteadOf A;
        // function doB diambil dari trait B daripada A
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();

// error nya
// Trait method doA has not been applied, because there are collisions with other trait methods on Sample