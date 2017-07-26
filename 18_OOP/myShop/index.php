<?php
include_once 'Connexion.php';
include_once 'BddManager.php';
include_once 'Produit.php';
include_once 'Promotion.php';
include_once 'Commercial.php';
include_once 'ProduitRepository.php';
include_once 'PromotionRepository.php';
include_once 'CommercialRepository.php';

$bdd = new BddManager();
$repoProduit = $bdd->getProduitRepository();
//$monProduit = $repoProduit->getProduitByid(1);

//var_dump($monProduit);

//$repoPromotion = $bdd->getPromotionRepository();
//$monProduit->getMesPromotions($bdd);
//$monProduit->deleteProduit($bdd);
//$monProduit->setCouleur("bleu");
//$monProduit->save($bdd);



//var_dump($monProduit);


//$produit = new Produit();
//$produit->setNom("TIMSFORS");
//$produit->setDescription("Zones de contact couvertes de cuir fleur souple teinté dans la masse de 1,2 mm d'épaisseur très moelleux et doux au toucher.");
//$produit->setPrix(999);
//$produit->setCouleur("vert");
//$produit->save($bdd);

$commercial = new Commercial();
$commercial->setNom("Jonathan");
$commercial->setTelephone("68431266");
$commercial->setPromotionId(1);
$commercial->save($bdd);





