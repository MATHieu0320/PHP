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
    <h1>Accueil</h1>
</body>

</html>
<!-- "<?=" remplace echo -->