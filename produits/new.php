<?php require '../header.php'; ?>
<?php require '../utils/bdd.php'; ?>

<?php
$sql = "SELECT * FROM categorie";
$requete = $pdo->query($sql);
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);

// Fluent
// $categories = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);  

if (!empty($_POST)) {

    extract($_POST);

    // Catégorie
    if (empty($categorie)) {
        $error['categorie'] = "La catégorie est obligatoire";
    }

    if (empty($reference)) {
        $error['reference'] = "La référence est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9]{4}$/', $reference)) {
        $error['reference'] = "Référence incorrecte";
    }

    if (empty($nom)) {
        $error['nom'] = "Le nom est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9 -\']{4,64}$/', $nom)) {
        $error['nom'] = "Nom incorrect";
    }

    if (empty($description)) {
        $error['description'] = "La description est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9 -\']{1,500}$/', $description)) {
        $error['description'] = "Description incorrecte";
    }

    if (!empty($prix)) {
        if (!preg_match('/^\d+(,|.\d{1,2})?$/', $prix)) {
            $error['prix'] = "Prix incorrect";
        }
    }

    if (!empty($stock)) {
        if (!preg_match('/^\d*)?$/', $prix)) {
            $error['prix'] = "Valeur incorrecte";
        }
    }


    if (empty($_FILES['image']['name'])) {
        $error['image'] = "L'image est obligatoire";
    } elseif (empty($error)) {
        if ($_FILES['image']['size'] > 256 * 1024) {
            $error['image'] = "L'image est trop volumineuse";
        }
        if (!in_array($_FILES['image']['type'], ['image/jpeg', 'image/png'])) {
            $error['image'] = "Ce format d'image n'est pas autorisé";
        }

        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $fichier = $reference . '.' . $extension;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/produits/' . $fichier)) {
            $error['image'] = "Le téléchargement n'a pas pu être effectué";
        };
    }
}

?>

<h1 class="my-4">Nouveau produit</h1>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="categorie" class="form-label">Catégorie</label>
        <select name="categorie" id="categorie" class="form-select">
            <option value="">-- Choisir une catégorie --</option>
            <?php foreach ($categories as $option) { ?>
                <option value="<?= $option['id']; ?>" <?= $option['id'] == $categorie ? 'selected' : ''; ?>><?= $option['libelle']; ?></option>
            <?php } ?>
        </select>
        <?php if (!empty($error['categorie'])) { ?>
            <small class="text-danger"><?= $error['categorie']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="reference" class="form-label">Référence</label>
        <input type="text" name="reference" id="reference" class="form-control" value="<?= $reference ?? ''; ?>">
        <?php if (!empty($error['reference'])) { ?>
            <small class="text-danger"><?= $error['reference']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="nom" class="form-label">Nom du produit</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $nom ?? ''; ?>">
        <?php if (!empty($error['nom'])) { ?>
            <small class="text-danger"><?= $error['nom']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control"><?= $description ?? ''; ?></textarea>
        <?php if (!empty($error['description'])) { ?>
            <small class="text-danger"><?= $error['description']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" name="prix" id="prix" class="form-control" value="<?= $prix ?? ''; ?>" placeholder="0.00">
        <?php if (!empty($error['prix'])) { ?>
            <small class="text-danger"><?= $error['prix']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" name="stock" id="stock" class="form-control" value="<?= $stock ?? ''; ?>" placeholder="0">
        <?php if (!empty($error['stock'])) { ?>
            <small class="text-danger"><?= $error['stock']; ?></small>
        <?php } ?>
    </div>

    <div class="form-group mt-4">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        <?php if (!empty($error['image'])) { ?>
            <small class="text-danger"><?= $error['image']; ?></small>
        <?php } ?>
    </div>

    <button class="btn btn-primary mt-3">Valider</button>

</form>

<?php require '../footer.php'; ?>