<?php require './header.php'; ?>

<?php
require "utils/affichage.php";
// var_dump($_POST);

// Controller
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
        $error['nom'] =  "Le champ nom est obligatoire";
    } else {
        // longueur mini/maxi

        // if (strlen($nom) < 2 || strlen($nom) > 64) {
        //     $error['nom'] =  "Longueur du nom incorrecte (de 2 à 64 caractères)";
        // }

        // lettres, espaces et - uniquement (REGEX)
        $motif = "/^[a-zA-Z][a-zA-Z- ']{0,62}[a-zA-Z]$/";
        if (!preg_match($motif, $nom)) {
            $error['nom'] = "Le nom doit comporter de 2 à 64 caractères alphabétiques ou espace, - et apostrophe";
        }
    }

    // Prénom
    // obligatoire
    if (empty($prenom)) {
        $error['prenom'] = "Le champ prénom est obligatoire";
    } else {
        // longueur mini/maxi
        // if (strlen($prenom) < 2 || strlen($prenom) > 32) {
        //     $error['prenom'] = "Longueur du prenom incorrecte (de 2 à 32 caractères)";
        // }

        // lettres, espaces et - uniquement (REGEX)
        $motif = "/^[a-zA-Z][a-zA-Z- ]{0,30}[a-zA-Z]$/";
        if (!preg_match($motif, $prenom)) {
            $error['nom'] = "Le prénom doit comporter de 2 à 32 caractères alphabétiques, espaces ou - ";
        }
    }

    // Email
    if (empty($email)) {
        $error['email'] = "L'adresse mail est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "L'adresse mail est incorrecte";
    }

    // Numéro de téléphone
    // Code postaux
    // Référence d'un produit, exemple : S123-20-000123

    // Si aucune erreur
    // -> Ecriture en BDD (Model)
}



?>

<form action="" method="POST">


    <!-- nom -->
    <!-- Vue -->
    <?= addText(
        name: 'nom',
        label: 'Nom (*)',
        placeholder: "Votre nom",
        error: !empty($error['nom']) ? $error['nom']  : ''
    );
    ?>

    <!-- Prénom -->
    <?= addText(
        name: 'prenom',
        label: 'Prénom (*)',
        placeholder: "Votre prénom",
        error: !empty($error['prenom']) ? $error['prenom']  : ''
    );
    ?>

    <!-- Email -->
    <?= addText(
        name: 'email',
        label: 'Email (*)',
        placeholder: "Votre adresse mail",
        error: !empty($error['email']) ? $error['email']  : ''
    );
    ?>

    <?= addButton("Envoyer", "success"); ?>

</form>
<?php require './footer.php'; ?>