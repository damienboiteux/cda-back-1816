<?php

require 'utils/bdd.php';

// Insertion de données
$sql = "INSERT INTO categorie (libelle) VALUES ('Cuisine'), ('Dessin'), ('Décoration')";
// $nb_lignes = $pdo->exec($sql);
// var_dump($nb_lignes);

// Modification
$sql = "UPDATE categorie SET libelle = 'Musik' WHERE libelle = 'Musique'";
// $nb_lignes = $pdo->exec($sql);
// var_dump($nb_lignes);

// Suppression
$sql = "DELETE FROM categorie WHERE libelle = 'Cuisine'";
// $nb_lignes = $pdo->exec($sql);
// var_dump($nb_lignes);

// Requêtes préparées
// SGBDR 
// - vérification syntaxe
// - vérification cohérence
// - "Compilation"
// - Optimisation

// Etat intermédiaire : requêtes préparées

// - Prise en compte des valeurs transmises
// - Exécution

$sql = "DELETE FROM categorie WHERE libelle = 'Cuisine'";
$sql = "DELETE FROM categorie WHERE libelle = 'Sport'";
$sql = "DELETE FROM categorie WHERE libelle = 'Décoration'";

// Paramètres par position
$sql = "DELETE FROM categorie WHERE libelle = ? AND  id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'Cuisine',
    12
]);

$stmt->execute([
    5,
    'Sport',
]);

$stmt->execute([
    'Valeur',
    65,
    'Décoration',
]);

// Paramètres nommés
$sql = "DELETE FROM categorie WHERE libelle = :lib AND id = :cle";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'lib' => 'Cuisine',
    'cle' =>  2
]);

$stmt->execute([
    'cle'   =>  5,
    'lib'   =>  'Sport',
]);

$stmt->execute([
    'bidon' =>  'Valeur',
    'lib'   =>  'Décoration',
    'cle'   => 65
]);








unset($pdo);
