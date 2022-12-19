<?php

// setcookie('derniereVisite', time(), mktime(23, 59, 59, 12, 31, 2022)); // date fixe
// setcookie('derniereVisite', time(), time() + 24 * 60 * 60); // durée

setcookie('derniereVisite', 'X', 0); // session

// setcookie('derniereVisite', 'X', 1); // supprimer le cookie (date antérieure)


// Stocker en BDD la nouvelle valeur du cookie



// setcookie('cookie1', 'V', 0, '/exercices');
// setcookie('cookie2', 'V', 0, '/admin');
// setcookie('cookie3', 'V', 0, '', 'mondomaine.fr'); // sur tout le domaine
// setcookie('cookie3', 'V', 0, '', '.mondomaine.fr'); // sur le domaine et tous les sous-domaines
// setcookie('cookie3', 'V', 0, '', '.mondomaine.fr'); // sur le sous-domaine doc


// setcookie('cookie5', 'V', 0, '', '', false); // Visible uniquement en https : true
setcookie('cookie6', 'V', 0, '', '', false, false); //
// setcookie('cookie7', 'V', 0, '', '', false, true); //

setcookie('cookie7', 'V2'); //


$_COOKIE['cookie7'] = 'V2';


var_dump($_COOKIE);



?>

<script>
    let cookies = document.cookie;
    console.log(cookies);
</script>