<?php

// include fait le reste
// require fait planter et joue pas
$title = "Autres";
require "index.php";


echo "autres"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h4 class="<?php if ($_SERVER["SCRIPT_NAME"] === "/autres.php"): ?> active <?php endif ?>">c bon</h4>

<body>

</body>

</html>fgf