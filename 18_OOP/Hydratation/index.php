<?php
// Fichier index.php
include 'BddManager.php';
include 'Produit.php';
include 'Promotion.php';


$bdd = new BddManager();
// $instanceProduit = $bdd->getProduitById(1);

$nouvelObjet = new Produit();
$nouvelObjet->setNom("Chaise Ikki");
$nouvelObjet->setDescription("Superchaise au PAM");
$nouvelObjet->setPrix(50);
$nouvelObjet->setCouleur("noir");
$bdd->insertProduit($nouvelObjet); //ceci est le save
