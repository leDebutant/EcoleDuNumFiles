<?php

// les fonctions natives
// par exemple celles
// qu'on a deja vu
// phpinfo();

// les fonctions customisée
// Ce sont celles qui sont
// tapées par le développeurs

// function maFonction(){
//   echo "Ceci est ma fonction";
// }

$chaine = "Ceci est ma chaine";

// function maFonctValeur($string){
//   echo $string;
// }

// Généralement on veut qu'une
// fonction retourne une valeur

// function returnAValue($string){
//   return $string;
// }
//
// $valeurRetournee = returnAValue($chaine);

//echo $valeurRetournee;

/* Une fonction peut
accepter plusieurs parametres */

function calculPhp($num1,$num2){
    $resultat = $num1 + $num2;
    return $resultat;
}

$chiffre1 = 12;
$chiffre2 = 8;

$resultatCalcul = calculPhp($chiffre1,$chiffre2);

echo $resultatCalcul;
 ?>
