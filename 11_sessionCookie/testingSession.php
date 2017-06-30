<?php

session_start();

//Ensuite on accède aux sessions à travers
// la variable globale qui opère comme tableau
// $_SESSION['notreVariable'] = array();


$chaine = "Ceci est ma chaine de caractère";

$_SESSION['notreVariable'][] = $chaine;


var_dump($_SESSION['notreVariable']);

 ?>
