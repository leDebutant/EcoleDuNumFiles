<?php

function loadMyClass($class){
    //Je vérifie que la classe n'a pas été déclarée
    if(class_exists($class)===false){
        //Si elle n'est pas déclarée je vérifie qu'elle existe bien dans le dossier "model"
        //à vous de changer ce dossier par le votre
        $string = $class.'.php';
        if(file_exists($string)===true){
            require $string;
        }
    }
}
spl_autoload_register('loadMyClass');

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





