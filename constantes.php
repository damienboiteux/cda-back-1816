<?php

const UNE_CONSTANTE = 1;

define('AUTRE_CONSTANTE', 2);

echo UNE_CONSTANTE + AUTRE_CONSTANTE;

// Constantes magiques

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);

function test()
{
    var_dump(__FUNCTION__);
}

test();
