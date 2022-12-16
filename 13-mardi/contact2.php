<?php require './header.php'; ?>

<?php
if (!empty($_POST)) {
    // Traitement des valeurs transmises par le formulaire

    var_dump($_POST);

    // Contrôles des valeurs transmises

    // Si tout est ok, utilisation des données
    // - stockage dans des fichiers 
    // - stockage en BDD
    // - redirection vers espace administration (formulaire de connexion)
    // - envoi de mail
    // - envoi à une API (interne, externe : paiement) 

    // Nom
    // obligatoire

    // longueur mini
    // longueur maxi
    // lettres, espaces et - uniquement



}
?>

<form action="./contact.php" method="POST">

    <div class="form-group">
        <label for="nom" class="form-label">Nom (*)</label>
        <input type="text" name="nom" value="" id="nom" class="form-control" placeholder="Votre nom" />
    </div>

    <?= addButton("Soumettre", "danger"); ?>

</form>
<?php require './footer.php'; ?>