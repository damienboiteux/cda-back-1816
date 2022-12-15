<?php

/*

Timestamp

nombre de secondes écoumées depuis 1er janvier 1970 à 00h00m00s

entier

JJ MM AAAA

ajouter 5 heures à 28/02/2013 22h00

conersion 
    entier  -> date
    date    -> entier

    28/02/2013 22h00 -> entier + ( 5 * 60 * 60) -> date

---

Bug de l'an 2000

JJMMAA

311299 +1 jours
010100 1er janvier 1900 ou 2000

31 / 12 / 2000


*/

// Heure courante (actuelle)
echo time() . '<br />';


$timestamp = 0;
// Timestamp -> chaîne de carctères
// echo date('d/m/Y') . '<br />';
// echo date('H:i:s') . '<br />';
// echo date('d/m/Y H:i:s', $timestamp) . '<br />';

// Chaîne de caractères -> Timestamp
// $timestamp = mktime(10, 0, 0, 1, 1, 2023);
// echo date('d/m/Y H:i:s', $timestamp) . '<br />';
// var_dump($timestamp);

// $debut = mktime(22, 0, 0, 2, 28, 2013);
// $debut += 5 * 60 * 60;
// echo date('d/m/Y H:i:s', $debut);


$timestamp = strtotime('today');
$timestamp = strtotime('yesterday');
$timestamp = strtotime('tomorrow');
$timestamp = strtotime('+7 days +5 hours');
$timestamp = strtotime('next Monday');
$timestamp = strtotime('31 december 2022');
$timestamp = strtotime('2022-12-31');
$timestamp = strtotime('31-12-2022');

echo date('d/m/Y H:i:s', $timestamp) . '<br />';
