<?php

/* CONCATENATION */
  // $phrase = "Ceci est ma première ligne"
  //         ." On peut concatener de cette façon"
  //         ."càd avec les points";

/* SAVOIR LA TAILLE D'UNE CHAINE DE CHARACTERE */
// $taille = strlen($phrase);

// *****
/* REMPLACER UN ELEMENT DANS UN CHAINE */
// $machaine = "Alfonso est fatigué(s) aujourd'hui";
// $res = str_replace("Alfonso est",
// "Les djeuns sont",
// $machaine);

/*  */
// $capital = "AUJOURD'HUI ON RESTE JUSQU'À 20H";
// $lowcase = strtolower($capital);
// var_dump($lowcase);
// $uppercase = strtoupper($lowcase);
//ucfirst($str)  // Cette fonction met
//la premiere lettre en majuscule
// var_dump($uppercase);


//Cette fonction vous permettra d'enlever
// des caractères au début et à la fin
// dans le cas présent on gardera les caractères
// entre la position 2 et la 7
// $str = "Ceci est la chaine ...erreur";
// $resString = substr($str, 2 , 7);

// var_dump($resString);
// Enleve espaces du début et de la fin
$chaineAvecEspace = "   Ceci est la chaine   ";
$chaineSansEspace = trim($chaineAvecEspace);
var_dump($chaineSansEspace);


 ?>
