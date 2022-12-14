<?php require '../header.php'; ?>
<?php require '../utils/bdd.php'; ?>

<?php
$sql = "SELECT * FROM categorie";
$requete = $pdo->query($sql);
$categories = $requete->fetchAll(PDO::FETCH_ASSOC);


if (!empty($_POST)) {

    $sql = "SELECT reference, nom, image FROM produit WHERE id = " . $_GET['id'];
    $old_produit    = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    $old_reference  = $old_produit['reference'];
    $old_nom        = $old_produit['nom'];
    $old_image      = $old_produit['image'];

    extract($_POST);

    // Catégorie
    if (empty($id_categorie)) {
        $error['id_categorie'] = "La catégorie est obligatoire";
    }

    if (empty($reference)) {
        $error['reference'] = "La référence est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9]{4}$/', $reference)) {
        $error['reference'] = "Référence incorrecte";
    } else {
        if ($old_reference != $_POST['reference']) {
            $sql = "SELECT count(*) FROM produit WHERE reference = '" . $reference . "'";
            $requete = $pdo->query($sql);
            if ($requete->fetch(PDO::FETCH_COLUMN) != 0) {
                $error['reference'] = "Cette référence est déjà connue";
            }
        }
    }

    if (empty($nom)) {
        $error['nom'] = "Le nom est obligatoire";
    } elseif (!preg_match('/^[a-zA-Z0-9 -\']{4,64}$/', $nom)) {
        $error['nom'] = "Nom incorrect";
    } else {

        if ($old_nom != $_POST['nom']) {
            $sql = "SELECT count(*) FROM produit WHERE nom = '" . $nom . "'";
            $requete = $pdo->query($sql);
            if ($requete->fetch(PDO::FETCH_COLUMN) != 0) {
                $error['nom'] = "Ce produit existe déjà";
            }
        }
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
        if (!preg_match('/^\d*$/', $prix)) {
            $error['prix'] = "Valeur incorrecte";
        }
    }

    if (empty($_FILES['image']['name'])) {
        // $error['image'] = "L'image est obligatoire";
        $fichier = $old_image;
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

    if (empty($error)) {
        $sql = "UPDATE produit SET ";
        $sql .= "reference = :ref, ";
        $sql .= "nom = :nom, ";
        $sql .= "description = :desc, ";
        $sql .= "prix = :prix, ";
        $sql .= "stock = :stock, ";
        $sql .= "image = :fichier, ";
        $sql .= "id_categorie = :cat ";
        $sql .= "WHERE id  = :id";
        try {
            $pdo->prepare($sql)->execute([
                "ref"   => $reference,
                "nom"   => $nom,
                "desc"  => $description,
                "prix"  => empty($prix) ? 0 : $prix,
                "stock" => empty($stock) ? 0 : $stock,
                "fichier" => $fichier,
                "cat"   => $id_categorie,
                "id"    => $_GET['id']
            ]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        ajoute_message("Le produit a été modifié", "primary");
        header('Location: ./index.php');
    }
} else {
    $sql = "SELECT * FROM produit WHERE id = " . $_GET['id'];
    $requete = $pdo->query($sql);
    $produit = $requete->fetch(PDO::FETCH_ASSOC);
    extract($produit);
}

?>

<h1 class="my-4">Modification produit</h1>

<?php require './formulaire.php'; ?>
<?php require '../footer.php'; ?>