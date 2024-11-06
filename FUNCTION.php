<?php
// declare(strict_types=1);
// $valeurs = dmeonstration($var, "1254");

// void renvoie rien en retour
// mixed plusieurs type
// ... infini variable peuvent etre ecrite
// tableau optionel
// & signifie qu'il modofie directement la variable sinon il faut utiliser une variable qui prendra les paramettres changer en compte exemple pusn et sort
// function mutable 
// void return null


// var_dump(1234);
// var_dump("ccez");
// var dump renvoie valeur type et length





// $Ouverture1 = readline("Entrer les horaires d'ouverture : ");
// $debut = null;
// while ($debut == null) {
//     $debut = readline("Entrez une valeur : ");

//     $minuscule = strtolower($debut);
//     echo $minuscule;
// }

// $TestPalyndrome = strrev($minuscule);
// echo $TestPalyndrome;
// if ($minuscule == $TestPalyndrome) {
//     echo "c'est un palyndrome";
// } else {
//     echo "ce n est pas un palydrome";
// }


$notes = [5, 5, 12, 4];

// echo count($notes);
// echo array_sum($notes);

// echo array_sum($notes) / count($notes);
// sort($notes);

$arrondir = 14.1247;

// echo round($arrondir, precision: PHP_ROUND_HALF_UP);

$AUTRES = [10, 20, 30];


// $autres2 = &$AUTRES;
// $autres2[] = 10;
// print_r($AUTRES);
// print_r($autres2);
// $a = 0;
// while ($a <= 10) {


//     if (8 > 6) {
//         exit("correct");
//         // exit empeche l execution de cc
//     }
//     echo "cc";
// }

// $insultes = ["pute", "connard", "merde"];
// $phrase = readline("phrase : ");
// // $phrase = readline("Entrez une phrase : ");


// foreach ($insultes as $key) {
//     $replace = $key[0] . str_repeat("£", strlen(string: $key) - 1);
//     $phrase = str_replace($key, $replace, $phrase);

//     echo $key[0];
// }

// echo $phrase;// php FUNCTION.php



$prenom = "doe";

function Bonsoir($nom = null)
{
    global $prenom;
    if ($nom == null) {
        return "bjr";
    }
    return "Bonsoir " . $nom . "\n" . "$prenom";
}
;

$salutation = Bonsoir("Morgan");

function Repondre($phrase)
{
    $reponse = readline($phrase);

    if ($reponse == "o") {
        return true;
    } else if ($reponse == "n") {
        return false;
    } else {
        Repondre($phrase);
    }
}
// $resultat = Repondre("Voulez vous continuer");

// var_dump($resultat);


function demander_crenau(string $phrase = "Veullez entre votre creneau"): array
{

    (array) $tableau = [];

    $ouverture = readline($phrase . " d'ouverture : ");
    $fermeture = readline($phrase . " de fermeture : ");


    $tableau[] = [$ouverture, $fermeture];

    if ($ouverture > $fermeture || $ouverture < 0 || $fermeture > 23) {

        echo "C'est horaires manque de logique \n";
        demander_crenau("Veullez entre votre creneau");

    } else {
        // echo "L'heure d'ouverture " . $ouverture . "h \n";
        // echo "L'heure de'fermeture " . $fermeture . "h ";

        return [$ouverture, $fermeture];
    }

}

// $creneau = demander_crenau("Veullez entre votre creneau");

// print_r($creneau);

// function agelimite()
// {
//     while (true) {
//         $age = readline("Entrez Votre age : ");

//         if ($age >= 18 && $age <= 35) {
//             echo "Vous avez l autorisation";
//             break;
//         } else {
//             echo "Impaussible de passer cette etape sans un age < 35 ou > a 18 \n";
//         }
//     }
// }

// agelimite();









