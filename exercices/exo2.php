<?php require '../header.php'; ?>

<h1>Exercice 2</h1>

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
                $sommes_colonnes[$j] += $i * 10 + $j;
                ?>
                <td><?= $i * 10 + $j; ?></td>
                <?php $somme_ligne += $i * 10 + $j; ?>
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