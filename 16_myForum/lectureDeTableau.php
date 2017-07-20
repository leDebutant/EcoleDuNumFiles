<?php


//mélange non assocatif avec les associatif
$tableau = [
  "Marcel",
  ["prenom" => "Bernard","nom"=>"Laporte"],
  ["animaux"=>[
              ["chat","domestic"=>"chien"]
            ]
        ]
];

//Essayer d'accéder à la valeur Marcel, Laporte et chien;
// var_dump($tableau[2]['animaux'][0]['domestic']);

// PDO renvoi toujours ce genre tableau
$tableauBaseDeDonnees = [
  ["username"=>"ensayofr","email"=>"le_debutant@yahoo.fr"],
  ["username"=>"apocalypse","email"=>"fernandez@gmail.com"]
];
//1) toutes les valeurs avec foreach
//2) que les emails avec foreach
// Vous ne sortirez pas d'ici tant que vous ne savez pas ça
// je ne déconne pas.
foreach($tableauBaseDeDonnees as $key => $tableau){
  foreach($tableau as $key2 => $value){
    if($key2 =="email"){
      var_dump($value);
    }
  }
}
 ?>
