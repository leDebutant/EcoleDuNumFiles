<?php

// ça donne le nombre de secondes
// depuis le 1 janvier 1970

// EXPIRATION
// DEUX MOIS DE VALIDITÉ
$exp = time() + 2*30*24*3600;

setcookie("monCookie", "maValeur", $exp);

// à la différence de la session
// le cookie peut-être valide à une
// échéance plus lointaine
// Vous devez le préciser aux
// utilisateurs selon les directives
// européennes
// var_dump($_COOKIE['monCookie']);

// WARNING: les cookies ne sont pas
// fait pour detenir des informations
// sensibles

// Les COOKIES marchent mal pour
// enregistrés des informations complexes
// càd des array() et des object()
// Pour se faire il va falloir utiliser
// une fonction qui s'appel serialize()
// Cette fonction va transformer un tableau
// ou un objet en String (chaine de caractère)
// Et donc quand on change de page il
// va falloir récupérer l'information
// à travers unserialize() pour que
// ce soit un array() ou un object()
// qui marche.

$tableau = [
  12,
  "Alfonso",
  "Stéphanie",
  "Virginie",

];

$serialized = serialize($tableau);
// var_dump($serialized);
// die();

// setcookie("mesCollegues", $serialized, $exp);

// var_dump($_COOKIE['mesCollegues']);
$unserialized = unserialize($_COOKIE['mesCollegues']);

var_dump($unserialized);
