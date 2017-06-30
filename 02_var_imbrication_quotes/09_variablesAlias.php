<?php
$a="b";
$b="c";
$c="d";
$d="e";
$e="f";


// Attention ceci marche même avec des fonctions
// et méthodes(fonction en language orienté objet)
echo $a."-";
echo $$a."-";   // $b
echo $$$a."-";  // $$b ou $c
echo $$$$a."-"; // $$$b ou $$c ou $d
echo $$$$$a;    //
