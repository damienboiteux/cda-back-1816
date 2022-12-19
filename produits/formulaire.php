<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="id_categorie" class="form-label">Catégorie</label>
        <select name="id_categorie" id="id_categorie" class="form-select">
            <option value="">-- Choisir une catégorie --</option>
            <?php foreach ($categories as $option) { ?>
                <option value="<?= $option['id']; ?>" <?= $option['id'] == $id_categorie ? 'selected' : ''; ?>><?= $option['libelle']; ?></option>
            <?php } ?>
        </select>
        <?php if (!empty($error['id_categorie'])) { ?>
            <small class="text-danger"><?= $error['id_categorie']; ?></small>
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