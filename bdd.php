<?php

/*
    - mysqli    : mySQL/mariaDB
    - oci8      : Oracle

    - PDO :  PHP DATA OBJECT

    3 classes :
        - PDO : connexion/lien avec la BDD
        - PDOStatment : requêtes/résultats
        - PDOException : erreurs


    1 - ouverture d'une connexion
    2 - création requête SQL
    3 - faire exécuter la requête sur le SGBDR
    4 - Récupérer les résultats
    5 - (exploiter les résultats)
    6 - Fermeture de la connexion

*/

// 1 - Ouverture de la connexion

// DSN : Data Source Name -> décrire la base de données cible
/*
    - host : localhost
    - port : defaut 3306
    - dbname : nom de la BDD
    - charset : utf8
*/

$dsn = "mysql:host=localhost;dbname=phpcda;charset=utf8";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    // die("Connexion impossible : " . $e->getMessage());
    // fputcsv($handler, [date(), $e->getMessage() ])
    header('location: ./erreur.php');
    die("Connexion à la base de données impossible");
}

class Categorie
{
    public $id;
    public $libelle;

    public function showLabel()
    {
        echo strtoupper($this->libelle);
    }
}

$sql = "SELECT * FROM categorie";

$resultat = $pdo->query($sql);

// $categories = $resultat->fetchAll(PDO::FETCH_CLASS, 'Categorie');

$categories = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo '<select>';
foreach ($categories as $categorie) {
    echo '<option value="' . $categorie['id'] . '">' . $categorie['libelle'] . '</option>';
}
echo '<select>';



var_dump($categories);
