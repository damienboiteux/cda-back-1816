<?php session_start(); ?>
<?php require "utils/utilitaires.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">PHP CDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                    <!-- <?php //if (!isset($menu_produit)) { 
                            ?> -->
                    <?php if ($_SERVER['REQUEST_URI'] != '/produits/test.php') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/produits/index.php">Produit</a>
                        </li>
                    <?php } ?>
                    <?php

                    require 'utils/bdd.php';

                    $sql = "SELECT * FROM categorie";
                    $categories = $pdo->query($sql);

                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégories</a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="/produits.php?cat=1">Homme</a>
                            <a class="dropdown-item" href="/produits.php?cat=2">Femme</a>
                            <a class="dropdown-item" href="/produits.php?cat=3">Enfant</a> -->
                            <?php while ($categorie = $categories->fetch(PDO::FETCH_OBJ)) { ?>
                                <a class="dropdown-item" href="/produits.php?cat=<?= $categorie->id; ?>"><?= $categorie->libelle; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php affiche_messages(); ?>

    <div class="container">
        <div class="row">