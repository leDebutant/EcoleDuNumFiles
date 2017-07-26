<?php
include_once 'BddManager.php';
include_once 'Produit.php';
include_once 'Promotion.php';

$bdd = new BddManager();
//$produits = $bdd->getAllProduits();

$monProduit = $bdd->getProduitById(1);
$monProduit->getMesPromotions($bdd);
$monProduit->deleteProduit($bdd);
//$monProduit->setCouleur("noir");
//$monProduit->save($bdd);

var_dump($monProduit);


//$produit = new Produit();
//$produit->setNom("TIMSFORS");
//$produit->setDescription("Zones de contact couvertes de cuir fleur souple teinté dans la masse de 1,2 mm d'épaisseur très moelleux et doux au toucher.");
//$produit->setPrix(999);
//$produit->setCouleur("vert");
//$produit->save($bdd);




