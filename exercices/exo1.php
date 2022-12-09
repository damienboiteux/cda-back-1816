<?php require '../header.php'; ?>

<h1>Exercice 1</h1>

<table class="table table-bordered text-center">

    <?php for ($i = 0; $i < 10; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j <= 10; $j++) {  ?>
                <td><?= $i * 10 + $j; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>

</table>

<hr>


<table class="table table-bordered text-center">

    <tr>
        <?php for ($i = 1; $i <= 100; $i++) {  ?>
            <td><?= $i; ?></td>
            <?php if ($i % 10 == 0) {
                echo '</tr><tr>';
            } ?>
        <?php } ?>
    </tr>

</table>

<?php require '../footer.php'; ?>