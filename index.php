<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;
    if (isset($title)) {
        echo "Accueil";
    } else {
        echo $title;
    }
    ?></title>
</head>

<body>
    <h1>Accueil</h1>
</body>

</html>