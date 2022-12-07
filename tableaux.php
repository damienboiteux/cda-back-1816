<?php

// Tableaux associatifs (clé est alphanumérique)

$tableau1 = array('nom' => 'Dupont', 'prenom' => 'Paul', 'age' =>  38);

// var_dump($tableau1);

$tableau2 = [
    'nom'       =>  'Dupont',
    'prenom'    =>  'Paul',
    'age'       =>  38,
];

// var_dump($tableau2);

// Tableaux avec index numériquement ( clé est un entier )

$tableau3 = array(
    1 => 'Bleu',
    2 => 'Blanc',
    3 => 'Rouge',
);

// var_dump($tableau3);

$tableau4 = array(
    'Bleu',
    'Blanc',
    'Rouge',
);

// var_dump($tableau4);

$tableau5 = ['Bleu', 'Blanc', 'Rouge'];

// var_dump($tableau5);

$tableau6 = array(
    'Bleu',  // 0
    'un'  => 'Blanc', // un
    'Rouge', // 1
);

// var_dump($tableau6);

// var_dump($tableau1['nom']);
// var_dump($tableau4[0]);
// var_dump($tableau4[1]);
// echo '<hr/>';
// var_dump($tableau6[0]);
// var_dump($tableau6['un']);
// var_dump($tableau6[1]);

$tableau6[1] = "Vert";
$tableau6[] = "Jaune";
$tableau6[] = "Orange";

// var_dump($tableau6);

$and = [
    0   => [
        0 => false,
        1 => false,
    ],
    1   => [
        0 => false,
        1 => true,
    ],
];

// $and[] = 'valeur1';
$and[1][] = 'peut-être';
$and[][] = 'OK';

var_dump($and);
