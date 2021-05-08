<?php

function sayHello(string $name, callable $function) {
    $finalName = call_user_func($function, $name);
    // call_user_func = $function($name); ini sama
    echo "Hello $finalName\n";
}

sayHello("Asep", "strtoupper");
sayHello("Asep", "strtolower");
sayHello("Asep", function (string $name): string {
    return strtoupper($name);
});
sayHello("Asep", fn($name) => strtoupper($name));