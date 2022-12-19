<?php

require '../utils/bdd.php';

if (!empty($_GET['id'])) {
    $sql = "DELETE FROM produit WHERE id = " . $_GET['id'];
    $pdo->exec($sql);
}

header('Location: ./index.php');
