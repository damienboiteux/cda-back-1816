<?php

// Structures conditionnelles

// if / SI ...

// $a = 10;

// if ($a < 10) {
//     echo 'OK<br />';
// }

// if ... else  / SI ... SINON ...

// if ($a < 10) {
//     echo "$a est plus petit que 10<br />";
// } else {
//     echo "$a est égal ou plus grand que 10<br />";
// }

// if ... elseif ... else ... / SI ... SINON SI ... SINON ...


// $a = 4;

// if ($a < 10) {
//     echo "$a est plus petit que 10<br />";
//     if ($a < 5) {
//         echo "$a est également plus petit que 5<br />";
//     }
// } elseif ($a > 10) {
//     echo "$a est plus grand que 10<br />";
// } elseif ($a > 10) {
//     echo "$a est plus grand que 10<br />";
// } elseif ($a > 10) {
//     echo "$a est plus grand que 10<br />";
// } else {
//     echo "$a est égal à 10<br />";
// }

// $a = 15;

// if ($a < 10) echo "$a est plus petit que 10<br />";


// switch

$a = 2;

// if ($a == 1) {
//     echo '$a vaut 1<br />';
// } else if ($a == 2) {
//     echo '$a vaut 2<br />';
// } elseif ($a == 3) {
//     echo '$a vaut 3<br />';
// } else {
//     echo 'On ne sait pas';
// }

// switch ($a) {
//     case 1:
//         echo '$a vaut 1<br />';
//         break;
//     case 2:
//         echo '$a vaut 2<br />';
//         break;
//     case 3:
//         echo '$a vaut 3<br />';
//         break;
//     default:
//         echo 'On ne sait pas';
//         // break;
// }

// $civilite = 5;

// switch ($civilite) {
//     case 0:
//         echo 'Mlle<br />';
//         break;
//     case 1:
//         echo 'Mme<br />';
//         break;
//     case 2:
//         echo 'M.<br />';
//         break;
//     default:
//         echo 'Autre<br />';
//         // break;
// }

// match : PHP 8

$civilite = 5;

$retour = match ($civilite) {
    0 => 'Mlle<br />',
    1 => 'Mme<br />',
    2 => 'M.<br />',
    default => 'Autre<br />'
};

echo $retour;
