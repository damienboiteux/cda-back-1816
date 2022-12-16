<?php require './header.php'; ?>

<h1>Inscription</h1>

<?php
if (!empty($_POST)) {

    extract($_POST);

    if (empty($_POST['identifiant'])) {
        $error['identifiant'] = "L'identifiant est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9]{6,32}$/', $identifiant)) {
        $error['identifiant'] = "Identifiant incorrect (de 6 à 32 lettres et chiffres)";
    }

    if (empty($_POST['email'])) {
        $error['email'] = "L'adresse mail est obligatoire";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "L'adresse mail est incorrecte";
    }

    if (empty($_POST['mdp'])) {
        $error['mdp'] = "Le mot de passe est obligatoire";
    } elseif (!preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!-&+@]).{8,32}$/', $mdp)) {
        $error['mdp'] = "Le mot de passe est incorrect";
    }

    if (empty($_POST['mdp2'])) {
        $error['mdp2'] = "La confirmation de mot de passe est obligatoire";
    } elseif ($_POST['mdp'] != $_POST['mdp2']) {
        $error['mdp2'] = "Les mots de passe ne correspondent pas";
    }

    // Qu'est-ce qu'on fait des données ?
    // Si aucune erreur
    if (!isset($error)) {
        // Ecrire dans la BDD
        require 'utils/bdd.php';

        // Paramètres par position
        // $sql = "INSERT INTO client (code_client, nom, prenom, email) VALUES ( ?, ?, ?, ?);";
        // $stmt = $pdo->prepare($sql);

        // $stmt->execute([
        //     "CODE",
        //     $identifiant,
        //     "Paul",
        //     $email
        // ]);

        // Parmètres nommés
        $sql = "INSERT INTO client (code_client, nom, prenom, email) VALUES ( :code_client, :nom, :prenom, :email);";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            "code_client" => "CODE2",
            "nom" => $identifiant,
            "prenom" => "Paul",
            "email" => $email
        ]);


        header('Location: index.php');
    };
}


$valeur_identifiant = empty($_POST['identifiant']) ? '' : $_POST['identifiant'];
$valeur_email       = empty($_POST['email']) ? '' : $_POST['email'];

?>


<form action="" method="POST">

    <!-- Identifiant -->
    <div class="form-group">
        <label for="identifiant" class="form-label">Identifiant</label>
        <input type="text" id="identifiant" name="identifiant" class="form-control" value="<?= $valeur_identifiant; ?>">
    </div>

    <!-- Affichage de l'erreur si elle existe -->
    <?php if (!empty($error['identifiant'])) { ?>
        <div>
            <small class="text-danger">
                <?= $error['identifiant']; ?>
            </small>
        </div>
    <?php } ?>

    <!-- Adresse mail -->
    <div class="form-group mt-4">
        <label for="email" class="form-label">Email</label>
        <input type="text" id="email" name="email" class="form-control" value="<?= $valeur_email; ?>">
    </div>

    <!-- Affichage de l'erreur si elle existe -->
    <?php if (!empty($error['email'])) { ?>
        <div>
            <small class="text-danger">
                <?= $error['email']; ?>
            </small>
        </div>
    <?php } ?>

    <!-- Mot de passe -->
    <div class="form-group mt-4">
        <label for="mdp" class="form-label">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" class="form-control">
    </div>

    <!-- Affichage de l'erreur si elle existe -->
    <?php if (!empty($error['mdp'])) { ?>
        <div>
            <small class="text-danger">
                <?= $error['mdp']; ?>
            </small>
        </div>
    <?php } ?>

    <!-- Confirmation du oot de passe -->
    <div class="form-group mt-4">
        <label for="mdp2" class="form-label">Confirmation du mot de passe</label>
        <input type="password" id="mdp2" name="mdp2" class="form-control">
    </div>

    <!-- Affichage de l'erreur si elle existe -->
    <?php if (!empty($error['mdp2'])) { ?>
        <div>
            <small class="text-danger">
                <?= $error['mdp2']; ?>
            </small>
        </div>
    <?php } ?>





    <button class="btn btn-primary mt-4">Valider</button>

</form>


<?php require './footer.php'; ?>