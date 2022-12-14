<?php

$dsn = "mysql:host=localhost;dbname=phpcda;charset=utf8";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    header('location: ./erreur.php');
    // die("Connexion à la base de données impossible");
}
