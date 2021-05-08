<?php

/**
 * $a && $b
 * $a || $b
 * !$a (php) = !a (js)
 * $a xor $b = jika salah satu true dia true, jika keduanya true dia false
 */

var_dump(true && true);
var_dump(true && false);

echo "\n======================\n";

var_dump(true || true);
var_dump(true || false);

echo "\n======================\n";

var_dump(true xor false);
var_dump(true xor true);

echo "\n======================\n";

var_dump(!true);
var_dump(!false);
