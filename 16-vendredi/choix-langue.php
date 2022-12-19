<?php
if (isset($_GET['lang'])) {
    setcookie('LANG', $_GET['lang']);
    $lang = $_GET['lang'];
} else {
    $lang = $_COOKIE['LANG'] ?? 'fr';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($lang == 'en') { ?>
        <div>
            <p>Choose language</p>
            <a href="?lang=fr">French</a> - <a href="?lang=en">English</a>
        </div>
    <?php } else { ?>
        <div>
            <p>Choisissez une langue</p>
            <a href="?lang=fr">Français</a> - <a href="?lang=en">Anglais</a>
        </div>
    <?php } ?>
</body>

</html>