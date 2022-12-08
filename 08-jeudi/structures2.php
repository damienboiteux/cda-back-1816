<?php

// structures répétitives

// Boucles

/* while  / TANT QUE */

// $a = 10;

// while ($a < 5) {
//     echo $a . '<br />';
//     $a++;
// }

/* do while / FAIRE ... TANT QUE */

// $a = 10;

// do {
//     echo $a . '<br />';
//     $a++;
// } while ($a < 5);


/* for */

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

/* foreach

permet de parcourir des tableaux

*/

// $prenoms = [
//     10 => 'Pierre',
//     15 => 'Paul',
//     50 => 'Jacques'
// ];


// $prenoms = [
//     'a' => 'Pierre',
//     'b' => 'Paul',
//     'c' => 'Jacques'
// ];

// foreach ($prenoms as $key => $prenom) {
//     echo "$key : $prenom <br />";
// }


// Instructions d'arrêt

// break

// for ($i = 0; $i < 4; $i++) {
//     for ($j = 0; $j < 4; $j++) {
//         for ($k = 0; $k < 4; $k++) {
//             echo "$i : $j : $k <br />";
//             if ($k == 2) {
//                 break (3);
//             }
//         }
//     }
// }

// continue

// for ($i = 0; $i < 10; $i++) {
//     if ($i % 2 == 0) continue;
//     echo "$i <br/>";
// }
