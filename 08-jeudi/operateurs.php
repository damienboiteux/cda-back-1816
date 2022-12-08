<?php


// Opérateur d'affectation =

// $d = $c = $b = $a = [];
// var_dump($a, $b, $c, $d);

// valeur vs référence

// Valeur
// $a = 1;
// $b = $a;
// var_dump($a, $b);

// $b = 2;
// var_dump($a, $b);

// référence
// $a = 1;
// $b = &$a;

// var_dump($a, $b);

// $b = 2;
// var_dump($a, $b);

// $a = 3;
// var_dump($a, $b);


// Opérateurs arithmétiques

/*

    + : addition
    - : soustraction
    * : multiplication
    / : division
    % : modulo (reste de la division entière)

        10 % 3 -> 1
        10 % 4 -> 2

    1  % 3 -> 1
    2  % 3 -> 2
    3  % 3 -> 0 
    4  % 3 -> 1
    5  % 3 -> 2
    6  % 3 -> 0
    7  % 3 -> 1
    8  % 3 -> 2

    75 min -> 1h 15m // % 60

    ** : puissance
    - : inverse/opposé ($a = -$b)

*/

// Opérateurs d'incrémentation / décrémentation

/*
    ++ / --

   
    $a = 5;
    $a++;
    // équivaut à : $a = $a + 1;
    var_dump($a);
    
*/

// pré incrémentation vs post incrémentation

// $a = 5;

// post incrementation
// $b = $a++;
// $b = $a--;

// pré incrémentation
// $b = ++$a;
// $b = --$a;

// var_dump($a, $b);

// Opérateurs combinés 

/*
    associer l'opérateur d'affectation (=) avec 
    - les opérateurs arithmétiques (+ - * / % **)
    - l'opérateur de concaténation (.)
*/

// $a = 1;
// $a += 5;  // équivaut à : $a = $a + 5; -> 6
// $a -= 2;  // équivaut à : $a = $a - 2; -> 4
// $a *= 3;  // équivaut à : $a = $a * 3; -> 12
// $a /= 2;  // équivaut à : $a = $a / 2; -> 6
// $a %= 4;  // équivaut à : $a = $a % 5; -> 2
// $a **= 3; // équivaut à : $a = $a ** 3 -> 8

// var_dump($a);

// $b = "Un texte";

// $b .= " complété";

// var_dump($b);


// Opérateurs de comparaison

// true si la comparaison est vérifiée
// false sinon


/*

= affectation !!!


$a = 10;
$b = "10";

var_dump(boolval($a == $b));  // comparaison large (uniquement les valeurs)
var_dump(boolval($a === $b));  // comparaison stricte ( valeurs + type)

*/

// $a = 10;
// $b = 10;

// var_dump(boolval($a > $b));
// var_dump(boolval($a >= $b));
// var_dump(boolval($a < $b));
// var_dump(boolval($a <= $b));

// $a = 10;
// $b = "10";

// var_dump(boolval($a != $b));
// var_dump(boolval($a !== $b));


// <=> : 1 si supérieur, -1 si inférieur, 0 si égal
// $a = 10;
// $b = 20;
// $c = "20";

// var_dump($a <=> $b);
// var_dump($b <=> $a);
// var_dump($b <=> $c);

// Opérateurs logiques

// AND, OR, XOR, NOT

/* AND / &&

    true && true    -> true
    true && false   -> false
    false && true   -> false
    false && false  -> false
*/

/* OR / ||

    true && true    -> true
    true && false   -> true
    false && true   -> true
    false && false  -> false
*/

/* XOR

    true && true    -> false
    true && false   -> true
    false && true   -> true
    false && false  -> false
*/

/* NOT / !
    !true -> false
    !false -> true
*/

// $a = 10;
// $b = 20;
// $c = 30;

// var_dump(boolval($a > $b  ||  $a < $c));

$a = false;

function test()
{
    return true;
}

var_dump($a && test());

// Opérateurs binaire (très peu utilisé)

// AND / &

// var_dump(5 | 9);

/*
    5   : 0 1 0 1
    9   : 1 0 0 1
          0 0 0 1 -> 1    

5 | 9 OR
    5   : 0 1 0 1
    9   : 1 0 0 1
          1 1 0 1 -> 13     

5 ^ 9 XOR  
*/

var_dump(5 << 3);  // X2  3 fois
var_dump(128 >> 3); // /2 3 fois
var_dump(~5);
/*
  5 :   00000101
        11111010
*/
