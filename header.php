<?php
$title = "Header";
$tape = "active";
require "index.php";

echo "cc"


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 <?php if ($tape === "active"): ?> class="active" <?php endif ?>>Test</h1>
</body>

</html>