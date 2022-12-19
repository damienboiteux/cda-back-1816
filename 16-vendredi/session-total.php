<?php

session_start();

var_dump($_SESSION['panier']);

foreach ($_SESSION['panier'] as $ligne_commande) {
?>
    <p><?= $ligne_commande['ref']; ?> : <?= $ligne_commande['qte']; ?></p>

<?php
}
/*
panier|
a:6:{

    i:0;a:2:
        {
            s:3:"ref";s:4:"H001";
            s:3:"qte";i:1;
        }
    i:1;a:2:{s:3:"ref";s:4:"H002";s:3:"qte";i:10;}
    i:2;a:2:{s:3:"ref";s:4:"F001";s:3:"qte";i:5;}
    i:3;a:2:{s:3:"ref";s:4:"F001";s:3:"qte";i:5;}
    i:4;a:2:{s:3:"ref";s:4:"F001";s:3:"qte";i:5;}
    i:5;a:2:{s:3:"ref";s:4:"F001";s:3:"qte";i:5;}
}

serialisation :

transformer une structure complexe (array, objet) en une chaîne da caractères
*/
