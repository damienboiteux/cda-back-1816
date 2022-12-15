<?php

require 'utils/bdd.php';

// Insertion de données
// $sql = "INSERT INTO categorie (libelle) VALUES ('Cuisine'), ('Dessin'), ('Décoration')";
// $nb_lignes = $pdo->exec($sql);
// var_dump($nb_lignes);

// Modification
// $sql = "UPDATE categorie SET libelle = 'Musik' WHERE libelle = 'Musique'";
// $nb_lignes = $pdo->exec($sql);
// var_dump($nb_lignes);

// Suppression
// $sql = "DELETE FROM categorie WHERE libelle = 'Cuisine'";
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

// $sql = "DELETE FROM categorie WHERE libelle = 'Cuisine'";
// $sql = "DELETE FROM categorie WHERE libelle = 'Sport'";
// $sql = "DELETE FROM categorie WHERE libelle = 'Décoration'";

// Paramètres par position
// $sql = "DELETE FROM categorie WHERE libelle = ? AND  id = ?";

// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     'Cuisine',
//     12
// ]);

// $stmt->execute([
//     5,
//     'Sport',
// ]);

// $stmt->execute([
//     'Valeur',
//     65,
//     'Décoration',
// ]);

// Paramètres nommés
// $sql = "DELETE FROM categorie WHERE libelle = :lib AND id = :cle";

// $stmt = $pdo->prepare($sql);

// $stmt->execute([
//     'lib' => 'Cuisine',
//     'cle' =>  2
// ]);

// $stmt->execute([
//     'cle'   =>  5,
//     'lib'   =>  'Sport',
// ]);

// $stmt->execute([
//     'bidon' =>  'Valeur',
//     'lib'   =>  'Décoration',
//     'cle'   => 65
// ]);

$sql = "INSERT INTO commande (date_commande, id_client) VALUES (:date_commande, :id_client);";
$stmt = $pdo->prepare($sql);

// $stmt->bindValue('date_commande', "2022-12-15 09:25:15");
// $stmt->bindValue('id_client', 1);

$date_cde = date('Y-m-d H:i:s');
$client = 1;

$stmt->bindParam('date_commande', $date_cde, PDO::PARAM_STR);
$stmt->bindParam('id_client', $client, PDO::PARAM_INT);

// $stmt->execute();
// $date_cde = "2022-12-15 09:34:15";
// $stmt->execute();
// $date_cde = "2022-12-15 09:35:15";
// $stmt->execute();

// $stmt->execute();
// var_dump($stmt);

// sleep(1);
// $date_cde = date('Y-m-d H:i:s');
// $stmt->execute();

// sleep(1);
// $date_cde = date('Y-m-d H:i:s');
// $stmt->execute();

// sleep(1);
// $date_cde = date('Y-m-d H:i:s');
// $stmt->execute();

// deboguage de requêtes
$stmt->execute();
$stmt->debugDumpParams();

unset($pdo);
