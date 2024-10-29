salut

<?php
$prenom = "Mathieu";
$nom = "def";
$note1 = 10;
$note2 = 20;

// echo "Bonjour " . $prenom . "vous avez eu " . ($note1 + $note2) / 2 . " de moyenne";
$notes = [12, 5, 45, 5, 8, 2];
echo $notes[5];
$tableau = [

    "Mail" => "ezf@gmail.com",
    "mdp" => "mdp",
    "notes" => [12, 5, 45, 5, 8, 2]

];
$tableau["mdp"] = "mdp2";
print_r($tableau["notes"]);


// echo $tableau["Mail"];

// $combien = (int) readline("Entrez Votre note : ");
// if ($combien > 10) {
//     echo "Bravo Vous avez la moyenne";
// } elseif ($combien === 10) {
//     echo "vous avez juste la moyenne";
// } else {
//     echo "Vous n'avez pas la moyenne";
// }
// switch ($combien) {
//     case '1':
//         echo "vous avez eu 1/ 10";
//         break;
//     case "2":
//         echo "vous avez eu 2/ 10";
//     default:
//         echo "je ne connais pas votre note";
//         break;
// }

// $heure = readline("Dites moi l'heure ");
// if ($heure == 11 || $heure == 16) {
//     echo "Il ne vous reste moins d'une heure";
// } else if (!($heure >= 8 && $heure < 12 || $heure >= 14 && $heure < 17)) {
//     echo "Ouvert";
// } else {
//     echo "Ferme";
// }


// while ($chiffre !== 10) {
//     $chiffre = (int) readline("Entrez un chiffre : ");
// }
echo "bravo vous etes sortie";


$valeurs = [12, 15, 4, 5440, 2];
// for ($i = 0; $i < 10; $i += 3) {
//     echo $i;
// }

// $eleves = [
//     [
//         "cm2" => "jean",
//         "cm1" => "marc"
//     ],
//     [
//         "cm2" => "jean",
//         "cm1" => "marc"
//     ]
// ];
// foreach ($eleves as $classe) {
//     foreach ($classe as $niveau => $eleve) {
//         echo $eleve . " est en " . $niveau . "\n";
//     }
// }
foreach ($valeurs as $key) {
    echo (int) $key . " \n";

}
// foreach ($eleves as $classe => $eleve) {
//     echo $eleve . " est en " . $classe . "\n";

// }
// ;


?>