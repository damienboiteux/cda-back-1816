<?php require './header.php'; ?>
<h1>Formulaire avec pièce jointe</h1>

<?php

// require 'params/parametres.php';

// var_dump($_POST);

if (!empty($_FILES)) {
    var_dump($_FILES);
    if (empty($_FILES['fichier']['name'])) {
        $error['fichier'] = "Veuillez joindre un fichier";
    } else {
        if ($_FILES['fichier']['size'] > 128 * 1024) {
            $error['fichier'] = "Fichier trop volumineux";
        } elseif (!in_array($_FILES['fichier']['type'], ['image/jpeg', 'image/png', 'image/gif'])) {
            // if (!in_array($_FILES['fichier']['type'], $types_autorises)) {
            $error['fichier'] = "Ce format de fichier n'est pas autorisé";
        } else {
            $fichier = 'uploads/' . time() . '-' . $_FILES['fichier']['name'];
            move_uploaded_file($_FILES['fichier']['tmp_name'], $fichier);
        }
    }
}

?>

<form action="" method="POST" enctype="multipart/form-data">

    <div>
        <label for="fichier">Fichier à uploader</label>
        <input type="file" name="fichier" id="fichier">
    </div>

    <?php if (!empty($error['fichier'])) { ?>
        <div>
            <small class="text-danger"><?= $error['fichier']; ?></small>
        </div>
    <?php } ?>



    <button class="btn btn-primary mt-4">Envoyer</button>
</form>


<?php require './footer.php'; ?>