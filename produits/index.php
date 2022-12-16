<?php $menu_produit = false; ?>
<?php require '../header.php'; ?>
<?php require '../utils/bdd.php'; ?>

<h1>Liste des produits</h1>
<?php

$sql = "SELECT * FROM produit";
$resultat = $pdo->query($sql);
$produits = $resultat->fetchAll(PDO::FETCH_ASSOC);

?>
<table>
    <thead>
        <tr>
            <th>Référence</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produits as $produit) { ?>
            <tr>
                <td><?= $produit['reference']; ?></td>
            </tr>
        <?php } ?>

    </tbody>
</table>


<?php require '../footer.php'; ?>