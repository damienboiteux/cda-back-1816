<?php

// Types simples (scalaires/scalar)

// booléens
// true / false
$vrai = true;
$faux = false;
// nombres entiers
/*

Décimal 0123456789 ( base 10)

Octal 01234567 (base 8)

Héxadécimal 0123456789ABCDEF (base 16)

#FFFFFF : blanc ( RGB 255,255,255 )

Binaire 0101000 (base 2)

*/

// $a = 45;  // décimal : 45
// $a = 045; // octal : 37
// $a = 0x45; // héxadécimal : 69
// $a = 0b11111111; // binaire : 255
// echo $a;


// nombres à virgule flottante
// $a = 3.14159;
// echo gettype($a);
// var_dump($a);

// chaînes de caractères

// $a = 'J\'ai dit : "Bonjour"';
// $a = "J'ai dit : \"Bonjour\"";

$objet = "livre";

// $chaine = 'le $objet est neuf';
// $chaine = "le $objet est neuf";
$chaine = "les {$objet}s sont neufs";

$chaine = "les " . $objet . "s sont neufs";
$chaine = 'les ' . $objet . 's sont neufs';
$chaine = "les " . $objet . 's sont neufs';



echo $chaine;
// echo gettype(false);
// echo '<br />';
// echo gettype(1);
// echo '<br />';
// echo gettype(1.0);
// echo '<br />';
// echo gettype("1");
// echo '<br />';
