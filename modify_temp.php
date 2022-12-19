<?php

// Si c'est une validation
if (!empty($_POST)) {

    extract($_POST); // $reference, $nom, ....

    // $_POST
    // Validation des données
    // UPDATE dans la BDD + redirection

} else {
    $sql = "";
    extract($produit); //$reference, $nom, ...
}


?>

<form action="">

    <!-- $reference, $nom, $prix, ...  -->


</form>
<!-- // Affichage du formulaire -->