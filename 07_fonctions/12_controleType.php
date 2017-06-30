<?php

// On va afficher les fonction qui se charge
// de controler le type des variables
$var = 4;
$r = is_numeric($var); // renvera un booleen -> float, int
$r = is_int($var); // vérifie si entier
$r = is_float($var); // vérifie si un décimal
$r = is_string($var); // vérifie si c'est une chaine
$r = is_bool($var); // vérifie si c'est un bool
$r = is_array($var); // vérifie si c'est un array
$r = is_object($var); // vérifie si c'est un objet

var_dump($r);

 ?>
