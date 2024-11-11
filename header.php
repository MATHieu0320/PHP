<?php

// function Serveur(string $index): string
// {
//     if ($index === $_SERVER["SCRIPT_NAME"]) {
//         return "active";
//     }
//     return "";

// }
// ;
$title = "Header";
$tape = "active";
function htm($til, $ted)
{
    return <<<HTML
<li>
    <a href="$til">$ted</a>
</li>
HTML;
}

require "index.php";

echo "cc";
$phone = "061454740";
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

    <h2 class="<?= Serveur("/header.php"); ?>">cc</h2>

    <div>
        <h4>pokemon</h4>




    </div>

</body>

</html>