<?php
// Fichier index.php
include 'BddManager.php';
include 'Produit.php';
include 'Promotion.php';
include 'Comment.php';
include 'Connexion.php';
include 'CommentRepository.php';
include 'ProduitRepository.php';
include 'PromotionRepository.php';


$bdd = new BddManager();
$produitRepository = $bdd->getProduitRepository();
$produit = $produitRepository->getProduitById(1);

var_dump($produit);

//$bdd = new BddManager();
// $instanceProduit = $bdd->getProduitById(1);

//Insertion
// $nouvelObjet = new Produit();
// $nouvelObjet->setNom("Chaise Ikki");
// $nouvelObjet->setDescription("Superchaise au PAM");
// $nouvelObjet->setPrix(50);
// $nouvelObjet->setCouleur("noir");
// $nouvelObjet->save($bdd); //ceci est le save

//Update ATTENTION: LE PRODUIT AVEC ID 4 DOIT EXISTER!
// $instanceProduit = $bdd->getProduitById(4);
// // var_dump($instanceProduit);
// // die();
// $instanceProduit->setNom("Nouveau nom Meuble");
// $instanceProduit->save($bdd);

//$instanceProduit = $bdd->getProduitById(1);
//$instanceProduit->delete($bdd);
//var_dump($instanceProduit);
//var_dump($instanceProduit->getMesPromotions($bdd));


//$instanceComment = new Comment();
//$instanceComment->setAuteur("Alfonso");
//$instanceComment->setComment("Super");
//$instanceComment->setPromotionId(1);
//$instanceComment->save($bdd);