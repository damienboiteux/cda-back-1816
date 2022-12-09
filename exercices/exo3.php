<?php require '../header.php'; ?>

<h1>Exercice 3</h1>

<table class="table table-bordered text-center">

    <?php

    $sommes_colonnes = [];
    for ($i = 1; $i <= 10; $i++) {
        $sommes_colonnes[$i] = 0;
    }


    ?>

    <?php for ($i = 0; $i < 10; $i++) { ?>
        <tr>
            <?php $somme_ligne = 0; ?>

            <?php for ($j = 1; $j <= 10; $j++) {  ?>
                <?php
                $valeur = $i * 10 + $j;
                $sommes_colonnes[$j] += $valeur;
                $limite = (int) $valeur ** 0.5; // racine carrée
                $compteur = 2;
                $premier = true;
                do {
                    if ($valeur == 2) continue;
                    if ($valeur % $compteur == 0) {
                        $premier = false;
                        break;
                    }
                    $compteur++;
                } while ($compteur <= $limite);
                // if ($premier == true) {
                //     $classe = "text-success";
                // } else {
                //     $classe = "text-danger";
                // }
                // Autre syntaxe (ternaire)
                $classe = $premier == true ? "text-success" : "text-danger";
                ?>
                <td class="<?= $classe; ?>"><?= $valeur; ?></td>
                <?php $somme_ligne += $valeur; ?>
            <?php } ?>

            <th scope="row"><?= $somme_ligne; ?></th>
        </tr>

    <?php } ?>
    <tr>
        <?php foreach ($sommes_colonnes as $somme_colonne) { ?>
            <th scope="col"><?= $somme_colonne ?></th>
        <?php } ?>
    </tr>

</table>



<?php require '../footer.php'; ?>