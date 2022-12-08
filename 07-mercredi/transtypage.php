<?php

// transtypage / cast


// Règles de conversion

// string -> integer/float
$a = "27";
$b = 1;
// echo $b + $a;

// bool -> integer/float
// $c = true; // 1
$c = false; // 0
// echo $b + $c;

// Forcer une conversion

// $d = (string) 1234;
// $d = (int) "1234.99";
// echo gettype($d);
// var_dump($d);

// strval(); 
// boolval(); 
// floatval(); 
// echo intval("0");

// vers chaînes de caractères

// var_dump(strval(null)); // chaîne vide
// var_dump(strval(false)); // chaîne vide
// var_dump(strval(true)); // chaîne '1'
// var_dump(strval(12)); // chaîne '12'
// var_dump(strval(12.5)); // chaîne '12.5'
// var_dump(strval(2e3)); // chaîne '2000'
// var_dump(strval(012)); // chaîne '10'

// vers bool

// false
var_dump(boolval(''));
var_dump(boolval([]));
var_dump(boolval(null));
var_dump(boolval(0));
var_dump(boolval(0.0));
var_dump(boolval("0"));

// true
var_dump(boolval(1234));
var_dump(boolval(-1234));
var_dump(boolval(' '));
var_dump(boolval('aze'));
var_dump(boolval(['aze']));
var_dump(boolval('null'));
var_dump(boolval('false'));
