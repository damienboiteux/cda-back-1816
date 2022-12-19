<?php
session_start();
require '../utils/bdd.php';
require '../utils/utilitaires.php';

if (!empty($_GET['id'])) {
    $sql = "DELETE FROM produit WHERE id = " . $_GET['id'];
    $pdo->exec($sql);
    ajoute_message("Le produit a été supprimé", "primary");
}

header('Location: ./index.php');
