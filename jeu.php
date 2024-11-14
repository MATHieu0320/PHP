<form action="/jeu.php" method="post">

    <!-- if faut mettre isset car sinon si la valeur est different d'un number ça fait une erreur -->


    <input type="number " name="chiffre" placeholder="Entre 0 et 1000" value="<?php if (isset($_POST["chiffre"]))
        echo htmlentities($_POST["chiffre"]) ?> ">
        <button type="submit">Deviner</button>

        <input type="checkbox" name="check" value="fraise">fraise
        <input type="checkbox" name="check2" value="vanille">vanille
        <input type="checkbox" name="check3" value="chocolat">chocolat

    </form>

<?php $data = $_POST;
    $Devine = "150";
    if ($_POST["check"]) {
        echo "true";
    }

    echo "cc";

    if (isset($data["chiffre"])) {
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