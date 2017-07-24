<?php
// Fichier index.php
include 'BddManager.php';
include 'Produit.php';
include 'Promotion.php';


$bdd = new BddManager();
var_dump($bdd->getProduitById(1));


