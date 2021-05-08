<?php

/*
untuk mengakses function yang sudah terlanjur override di class parent
itu bisa pake keyword 'parent'

parent::nameFunction();
 */

namespace Data;

class Shape {
    function getCorner(): int {
        return 0;
    }
}

class Rectangle extends Shape {
    public function getCorner(): int {
        return 4;
    }

    public function getParentCornet(): int {
        return parent::getCorner();
    }
}