<?php

var_dump($_GET);

function test(int $x, int $y = 2, int $z = 3, $a = 8, $b = 9): int
{
    return $x + $y + $z + $a + $b;
}

// Paramètres nommés

var_dump(test(10, b: 50, z: 35));
