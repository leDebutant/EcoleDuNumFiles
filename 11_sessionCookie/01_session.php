<?php

// Les sessions permettent de passer
// des informations d'un page à une autre
// sans perte contrairement aux autres variables

// Pour que celà marche NÉANMOINS il faut
// déclarer la fonction suivante
// dans toutes les pages ou on utilise Les
// sessions
session_start();

//Ensuite on accède aux sessions à travers
// la variable globale qui opère comme tableau
$_SESSION['notreVariable'] = 45;

var_dump($_SESSION['notreVariable']);

// Ça a une durée limité et donc a vocation
// a expirer. Généralement 30 min. Ceci est
// configurable dans php.ini

// On utilise typiquement pour les sessions
// utilisateurs
// si jamais on décide d'ayppuyer le bouton
// deconnexion en tant qu'utilisateur il va
// falloir détruire la session
// Ceci se fait par le biais de la fonction

session_destroy(); // détruit tout

// On peut toujours appliquer un
$_SESSION['derniereRecherche']="Machine à café";
unset($_SESSION['idUtilisateur']);

// si la session réside dans l'index idUtilisateur
// alors cette session sera détruite
// NOTE: unset() marche pour pour tous les autres
// tableaux


 ?>
