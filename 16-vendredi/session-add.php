<?php

session_start();

var_dump($_SESSION);

$_SESSION['panier'][] = [
    'ref'   => 'F001',
    'qte'   => 5,
];

header('Location: ./session-total.php');
