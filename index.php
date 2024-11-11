<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php if (isset($title)): ?>
            <?= $title; ?>
        <?php else: ?>
            Accueil
        <?php endif ?>
    </title>



</head>

<body>
    <pre>
        <?php print_r($_SERVER) ?>
    </pre>
    <h1>Accueil</h1>

    <?php require "footer.php"; ?>
</body>

</html>

supervariable accesible partout ($_SERVER)