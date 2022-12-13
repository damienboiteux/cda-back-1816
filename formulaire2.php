<?php require './header.php'; ?>

<h2>Case à cocher</h2>

<?php

$checked = "";
$radio = "";
$items = "";
$items2 = "";

if (!empty($_POST)) {

    var_dump($_POST);

    extract($_POST);

    if (isset($_POST['accepte'])) {
        // La case est cochée
        $checked = "checked";
    } else {
        // La case n'est pas cochée
        $checked = "";
    }
    // $checked = isset($_POST['accepte']) ? 'checked' : '';

    if (isset($_POST['radio'])) {  // $radio
        // Une des cases est cochée
        // var_dump($_POST['radio']);
        // $checked = "checked";

    } else {
        // Aucune des cases n'est cochée
        // $checked = "";
    }

    if (empty($_POST['items'])) {
        // Aucune sélection (choix par défaut)
    } else {
        // Un item sélectionné

        switch ($_POST['items']) {
            case "1":
                echo 'Mademoiselle';
                break;
            case "2":
                echo 'Madame';
                break;
            case "3":
                echo 'Monsieur';
                break;
        }
    }
}

$liste = [1 => 'Mademoiselle', 2 => 'Madame', 3 => 'Monsieur'];

?>


<form action="" method="post">

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="accepte" name="accepte" <?= $checked; ?>>
        <label for="accepte" class="form-check-label">J'accepte ...</label>
    </div>

    <hr />

    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio1" name="radio" value="1" <?= $radio == 1 ? "checked" : ""; ?>>
        <label for="radio1" class="form-check-label">Choix 1</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="radio" value="2" <?= $radio == 2 ? "checked" : ""; ?>>
        <label for="radio2" class="form-check-label">Choix 2</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="radio3" name="radio" value="3" <?= $radio == 3 ? "checked" : ""; ?>>
        <label for="radio3" class="form-check-label">Choix 3</label>
    </div>

    <hr />

    <div class="">
        <label for="items">Liste déroulante</label>
        <select name="items" id="items" class="form-select">
            <option value="">-- Choisir un item --</option>
            <option value="1" <?= $items == "1" ? "selected" : ""; ?>>Mademoiselle</option>
            <option value="2" <?= $items == "2" ? "selected" : ""; ?>>Madame</option>
            <option value="3" <?= $items == "3" ? "selected" : ""; ?>>Monsieur</option>
        </select>
    </div>

    <div class="">
        <label for="items2">Liste déroulante 2</label>
        <select name="items2" id="items2" class="form-select">
            <option value="">-- Choisir un item --</option>
            <?php
            foreach ($liste as $key => $value) {
                echo "<option value='$key' " . ($items2 == $key ? 'selected' : '') . ">$value</option>";
            }
            ?>
        </select>
    </div>


    <div>
        <small class="text-danger"></small>
    </div>

    <button class="btn btn-primary mt-4" name="submit">Valider</button>


</form>





<?php require './footer.php'; ?>