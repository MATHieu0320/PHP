<?php require "serveur.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="row">
        <div class="">Accueil</div>
        <div class="">Header</div>
        <div class="">
            <ul>
                <li><a href="index.php" class="<?php if ($_SERVER['SCRIPT_NAME'] === '/index.php')
                    echo 'active'; ?>">d</a></li>
                <li>
                <li><a href="header.php" class="<?= Serveur("/header.php"); ?>">header</a></li>
                <li>
                <li><a href="autres.php" class="<?= Serveur("/autres.php"); ?>">d</a></li>
                <li>
                    <h2 class=" <?= Serveur("/header.php"); ?>">cc</h2>
            </ul>
        </div>
    </div>
</body>

</html>