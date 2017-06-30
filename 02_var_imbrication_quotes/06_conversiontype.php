<?php

/* chaine -> integer */
// $zero = "0"; //Ceci est considéré une chaine
// $zero = $zero + 1;
//le zero résultant sera un entier (integer)

/* integer -> booleen */
// $num = 10;
$nouveauBooleen = (bool) $num; // ceci sera un booléen

/* float -> integer */
// $decimal = 5.00;
$newInteger = (int) $decimal;

/* integer -> chaine */
$nombre = 34;
// $nouvelleChaine = "$nombre";
// ou encore
$nouvelleChaine = (string) $nombre;

var_dump($nouvelleChaine);

 ?>
