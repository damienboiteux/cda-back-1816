<?php require './header.php'; ?>

<?php

// var_dump($_POST);


if (!empty($_POST)) {
    // Traitement des valeurs transmises par le formulaire

    // var_dump($_POST);

    // Contrôles des valeurs transmises

    // Si tout est ok, utilisation des données
    // - stockage dans des fichiers 
    // - stockage en BDD
    // - redirection vers espace administration (formulaire de connexion)
    // - envoi de mail
    // - envoi à une API (interne, externe : paiement) 

    extract($_POST); // Crée pour chaque élément du tableau une variable (nom variable = clé de la ligne du tableau, valeur de la variable = valeur de la ligne du tableau)

    // Nom
    // obligatoire
    if (empty($nom)) {
        echo "Le champ nom est obligatoire<br />";
    } else {
        // longueur mini/maxi
        if (strlen($nom) < 2 || strlen($nom) > 64) {
            echo "Longueur du nom incorrecte (de 2 à 64 caractères)";
        }
        // lettres, espaces et - uniquement (REGEX)
    }

    // Préom
    // obligatoire
    if (empty($prenom)) {
        echo "Le champ prenom est obligatoire<br />";
    } else {
        // longueur mini/maxi
        if (strlen($prenom) < 2 || strlen($prenom) > 64) {
            echo "Longueur du prenom incorrecte (de 2 à 64 caractères)";
        }
        // lettres, espaces et - uniquement (REGEX)
    }
}



?>

<form action="" method="POST">

    <div class="form-group">
        <label for="nom" class="form-label">Nom (*)</label>
        <input type="text" name="nom" value="<?= empty($nom) ? '' : $nom; ?>" id="nom" class="form-control" placeholder="Votre nom" />
    </div>

    <div class="form-group">
        <label for="prenom" class="form-label">Prénom (*)</label>
        <input type="text" name="prenom" value="<?= empty($prenom) ? '' : $prennom; ?>" id="nom" class="form-control" placeholder="Votre prénom" />
    </div>

    <!-- <input type="submit" value="Valider" /> -->
    <button class="btn btn-primary mt-4">Valider</button>

</form>
<?php require './footer.php'; ?>