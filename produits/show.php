<?php require '../header.php'; ?>
<?php require '../utils/bdd.php'; ?>

<?php
if (!empty($_GET['id'])) {

    // $sql = "SELECT * FROM produit, categorie";
    // $sql .= " WHERE produit.id=" . $_GET['id'];
    // $sql .= " AND produit.id_categorie=categorie.id";

    $sql = "SELECT * FROM produit";
    $sql .= " INNER JOIN categorie ON produit.id_categorie=categorie.id";
    $sql .= " WHERE produit.id=" . $_GET['id'];

    $requete = $pdo->query($sql);
    if (!$produit = $requete->fetch(PDO::FETCH_ASSOC)) {
        header('Location: ./index.php');
    }

    extract($produit);
}

?>


<h1>Détails d'un produit</h1>

<p>Référence : <?= $reference; ?></p>
<p>Nom : <?= $nom; ?></p>
<p>Catégorie : <?= $libelle; ?></p>
<p>Description : <?= $description; ?></p>
<p>Prix : <?= $prix; ?> €</p>
<p>Stock : <?= $stock; ?></p>
<div class="col-6">
    <?php if (!empty($image)) { ?>
        <img src="../uploads/produits/<?= $image; ?>" class="img-fluid" />
    <?php } else { ?>
        <!-- <img src="https://via.placeholder.com/400x400?text=Aucune+Photo+Disponible" class="img-fluid" /> -->
        <img src="../uploads/produits/placeholder.png" class="img-fluid" />

    <?php } ?>
</div>

<a href="./index.php" class="btn btn-primary mt-4">Retour à la liste</a>

<?php require '../footer.php'; ?>