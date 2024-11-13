<form action="/jeu.php" method="post">
    <input type="number " name="chiffre" placeholder="Entre 0 et 1000" value="<?= htmlentities($_POST["chiffre"]) ?>">
    <button type="submit">Deviner</button>
</form>

<?php $data = $_POST;
$Devine = "150";




if (is_int($data["chiffre"])) {
    echo $data["chiffre"] . " ";
    if ($data["chiffre"] > $Devine) {
        echo "Plus bas";
    } else if ($data["chiffre"] < $Devine) {
        echo "Plus haut";
    } else if ($data["chiffre"] === (string) $Devine) {
        echo "Bravo tu as trouvé le bon numero";
    }
} else {
    echo "ce n'est pas un nombre";
}
?>