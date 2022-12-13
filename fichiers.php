<?php

// Fonctions d'accès rapide

// $fichier = "data/fichier1.txt";

// $contenu = file_get_contents($fichier);

// var_dump($contenu);
// // \r\n -> <br />
// echo nl2br($contenu);

// readfile($fichier);

// $contenu = file($fichier);
// var_dump($contenu);

// $contenu = file($fichier, FILE_IGNORE_NEW_LINES);
// var_dump($contenu);

// var_dump($contenu[2]);

// echo $contenu[0] . ' ' . $contenu[1] . ' - ' . $contenu[3] . '<br />';


// file_put_contents('data/put-contents.txt', "aze iuyze liaze ");
// $personne = ['Alain', '|', 'Dubois', '|', 54, '|', 'Strasbourg'];
// file_put_contents('data/put-contents.txt', $personne);


// Ouverture d'un fichier

$fichier = "data/fichier1.txt";

/*
    read
->  r  : lecture + pointeur au début
    r+ : lecture + ecriture + pointeur au début

    write
->  w  : ecriture + taille du fichier à 0
    w+ : lecture + ecriture + taille du fichier à 0

    append
->  a  : lecture + pointeur à la fin
->  a+ : lecture + ecriture + pointeur à la fin

    x  : w avec création du fichier
    x+ : w+ avec création du fichier
*/

// $mode = "r";

// $size = filesize('data/fichier1.txt');
// var_dump($size);

// $handler = fopen($fichier, $mode);
// var_dump(fread($handler, filesize('data/fichier1.txt')));

// while ($data = fread($handler, 10)) {
//     var_dump($data);
// }

// fclose($handler);

// echo '<hr/>';

// $handler = fopen($fichier, $mode);
// while (!feof($handler)) {
//     var_dump(fread($handler, 10));
// }

// fgetc() : caractère par caractère
// while (!feof($handler)) {
//     var_dump(fgetc($handler));
// }

// fgets() : migne par ligne
// while (!feof($handler)) {
// var_dump(fgets($handler));
// }


// Ecriture dans un fichier

// $fichier = "data/fichier2.txt";
// $mode = "w";
// $mode = "a";

// $handler = fopen($fichier, $mode);

// for ($i = 0; $i < 5; $i++) {
//     fwrite($handler, "Ligne ter  $i\r\n");
// }

// for ($i = 0; $i < 5; $i++) {
//     fprintf($handler, "Ligne %d -> %s \r\n", $i, 'ok');
// }

// CSV : Comma Separated Values

// $mode = "r";
// $fichier = "data/fichier.csv";
// $handler = fopen($fichier, $mode);

// while ($data = fgetcsv($handler)) {
//     var_dump($data);
// };

$mode = "a";
$fichier = "data/fichier.csv";
$handler = fopen($fichier, $mode);

$ligne = ['Marie', 'Dubois', 32, 'Nice'];
fputcsv($handler, $ligne);

fclose($handler);  // exécuter automatiquement en fin de script