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
echo "bravo vous etes sortie" . "\n";


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

$eleves2 = [
    "cp" => ["po", "kabute", "dezz"],
    "ce1" => ["marcus"]
];
foreach ($eleves2 as $classe => $Listeleves) {
    echo "la classe des eleves de " . $classe . "\n ";
    foreach ($Listeleves as $key) {
        echo "-$key \n";
    }
    echo "\n";

}
;
$Rentre = null;
$tableau22 = [];
// while ($Rentre !== "fin") {
//     $Rentre = readline("Entrer une note || taper le mot fin : ");

//     array_push($tableau22, $Rentre);
//     print_r($tableau22);

//     // ou 

//     $tableau22[] = (int) $Rentre;

// }

// echo "Les numeros : \n";
// foreach ($tableau22 as $key) {
//     echo "- $key \n";
// }

// PHP pas de push mais tableau[] = ()element qu'on push 





// $Ouverture1 = readline("Entrer les horaires d'ouverture : ");
// $fermeture1 = readline("Entrer les horaires de fermeture : ");

// $RajouterUnCreneau = readline("Voulez vous ajouter un creneau (y/n)");

// if ($RajouterUnCreneau == "y") {
//     $Ouverture2 = readline("Entrer les horaires d'ouverture : ");
//     $fermeture2 = readline("Entrer les horaires de fermeture : ");
//     $horaireVoulu = readline("Entrer la valeur ou vous voulez venir");


//     if ($horaireVoulu < $Ouverture1 && $horaireVoulu >= $fermeture1 && $horaireVoulu < $Ouverture2 && $horaireVoulu > $fermeture2) {
//         echo "Magasin Fermé " . " \n";

//     } else {
//         echo "Magasin Ouvert " . " \n";
//     }
// } else {
//     echo $Ouverture1;
//     $horaireVoulu = readline("Entrer la valeur ou vous voulez venir");
//     if ($horaireVoulu < $Ouverture1 && $horaireVoulu >= $fermeture1) {
//         echo "Magasin Fermé " . " \n";

//     } else {
//         echo "Magasin Ouvert " . " \n";
//     }

// }

// $creneau = [];

// f

// while (true) {
//     $debut = readline("Heure d'ouverture");
//     $fin = readline("heure de fermeture");
//     if ($debut >= $fin) {
//         echo "Impaussible l heure de debut est superieur a l heure de fin";
//     } else {
//         $creneau[] = [$debut, $fin];


//         $AutresDf = readline("Voulez vous mettre d' autre horaires(y/n)");

//         if ($AutresDf == "n") {
//             break;
//         }
//     }
// }
// $ValeurVoulu = (int) readline("Quelle heure voulez vous savoir si c'est ouvert");
// $creneauTrouve = false;

// foreach ($creneau as $key) {
//    if ($h) {
//     # code...
//    }
// }
// print_r($creneau);
