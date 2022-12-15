<?php

// require 'required.php';

require './header.php';
require 'utils/bdd.php';


if (!empty($_GET['cat'])) {
    $sql = "SELECT * FROM produit WHERE id_categorie=" . $_GET['cat'];
} else {
    $sql = "SELECT * FROM produit";
}

/*
$produits = $pdo->query($sql);
while ($produit = $produits->fetch(PDO::FETCH_ASSOC)) {
?>
    <div class="col-6">
        <h2><?= $produit['nom']; ?></h2>
        <small><?= $produit['reference']; ?></small>
        <p><?= $produit['description']; ?></p>
        <p><strong><?= $produit['prix']; ?> €</strong></p>
    </div>
<?php
}
*/

// PDO::FETCH_OBJ : chaque ligne est placée dans un objet de classe stdClass
$produits = $pdo->query($sql);
while ($produit = $produits->fetch(PDO::FETCH_OBJ)) {
?>
    <div class="card border-primary mb-3 col-6">
        <div class="card-header"><?= $produit->nom; ?> <span class="btn btn-success me-auto"><?= $produit->prix; ?> €</span></div>
        <div class="card-body">
            <h4 class="card-title"><?= $produit->reference; ?></h4>
            <p class="card-text"><?= $produit->description; ?></p>
            <a href="#" class="btn btn-primary mt-2">Détail</a>
        </div>
    </div>

<?php
}

require './footer.php';
