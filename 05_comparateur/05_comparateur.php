<?php

// $num = 4.00;
// var_dump($num);
// == Ce signe compare les valeurs sans
// se soucier du type
// === Ce signe compare non seulement les
// valeurs mais aussi le type
// Les types possibles sont : String, int,
// float, boolean, array, objet

// if($num === 4){
//   echo "Le chiffre est bien 4";
// } else{
//   echo "Le chiffre n'est pas une entier";
// }
$nom = "Alfonso";
$etudiant = "Paul";

// && veut dire ET on peut remplacer AND
// || veut dire OU on peut remplcaer par OR
// XOR Ou exclusif c'est à dire l'un ou
// mais pas les deux ni aucun des deux.

// if($nom == "Alfonso" XOR $etudiant == "Paul" ){
//   echo "Super équipe";
// }else{
//   echo "Projet moyen...";
// }

// LA DIFFÉRENCE
// != ceci compare les résultat et non
// le type
// !== ceci compare les résultats et aussi
// le type

// $num = 5.00;

// if($num !== 4){
//   echo "Ce chiffre est diff de 4";
// }elseif($num == 4){
//   echo "Il s'agit du 4 mais pas du même type";
// } else{
//   echo "Ceci n'est pas un 4";
// }

/* Condition if raccourci */
// $num = 5;

// if($num == 5) echo "ceci est un 5";

// if($num == 5):
//   echo "ceci est égale à 5";
// elseif($num == 6):
//   echo "ceci est égale à 6";
// endif;

$nom = "Paul";
$jours = 30;

$residual = $jours % 2;
//Donc le modulo retourne la residus de la division
// entre le $jours et le 2; Donc si égal à un alors
// le chiffre sera impair

if($nom == "Paul" && $residual == 0){
  echo "Paul nous paie un coup à boire";
} else{
  echo "Personne ne boit";
}

 ?>
