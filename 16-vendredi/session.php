<?php

session_start();


echo 'ok';

var_dump($_SESSION);

$_SESSION['panier'] = [
    0 => [
        'ref' => 'H001',
        'qte' => 1
    ],
    1 => [
        'ref' => 'H002',
        'qte' => 10
    ]
];

$_SESSION['user'] = [];

$_SESSION['message'] = [];
