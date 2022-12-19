<?php

$tableau = [
    'a' => 'Pierre',
    'b' => 'Paul',
    'c' => 'Jacques',
];

$chaine = serialize($tableau);
var_dump($chaine);
var_dump(unserialize($chaine));

// $chaine = json_encode($tableau);
// var_dump($chaine);
// var_dump(json_decode($chaine));
