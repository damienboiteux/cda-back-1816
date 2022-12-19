<?php $menu_produit = false; ?>
<?php require '../header.php'; ?>
<?php require '../utils/bdd.php'; ?>

<h1>Liste des produits</h1>
<?php

$sql = "SELECT * FROM produit";
$resultat = $pdo->query($sql);
$produits = $resultat->fetchAll(PDO::FETCH_ASSOC);

/*
    PDO::FETCH_BOTH (défaut) : tableau numérique + associatif ( clé = nom de la colonne dans la BDD)
    PDO::FETCH_NUM : tableau numérique ( indice : position dans la table )
    PDO::FETCH_ASSOC : tableau associatif (clé = nom de la colonne dans la BDD)
    PDO::FETCH_OBJ : objet de classe stdClass (attribut = nom de la colonne de la BDD)
    PDO::FETCH_CLASS : objet dans une classe définie par l'application (attributs = nom de colonne)
*/

?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Référence</th>
            <th scope="col">Nom</th>
            <th scope="col">Stock</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produits as $produit) { ?>
            <tr>
                <td><?= $produit['reference']; ?></td>
                <td><?= $produit['nom']; ?></td>
                <td><?= $produit['stock']; ?></td>
                <td>
                    <a href="./show.php?id=<?= $produit['id']; ?>" class="btn btn-success">Voir</a>
                    <a href="./modify.php?id=<?= $produit['id']; ?>" class="btn btn-warning">Modifier</a>
                    <a href="./delete.php?id=<?= $produit['id']; ?>" class="btn btn-danger" onclick="return confirm('Etes-vous certain de vouloir supprimer ce produit ?');">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="./new.php" class="btn btn-primary mt-4">Ajouter un produit</a>

<?php require '../footer.php'; ?>