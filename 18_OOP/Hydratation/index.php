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
$produitRepository = $bdd->getProduitRepository();
$produit = $produitRepository->getProduitById(1);
//$produits = $produitRepository->getAllProduit();

var_dump($produit);

//$produit = new Produit();
//$produit->setNom("Chaise");
//$produit->setPrix(250);
//$produit->setCouleur("noire");
//$produit->setDescription("Super chaise");
//$produit->save($bdd);

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