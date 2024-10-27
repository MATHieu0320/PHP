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


echo $tableau["Mail"];
?>