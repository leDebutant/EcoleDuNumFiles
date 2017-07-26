<?php

class ProduitRepository
{
    public $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getProduitById($id){
        $object = $this->connexion->prepare('SELECT * FROM produit WHERE id=:id');
        $object->execute(array(
            'id'=>$id
        ));
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);

        return new Produit($produits[0]);
    }

    public function getAllProduits(){
        $object = $this->connexion->prepare('SELECT * FROM produit');
        $object->execute(array());
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);

        foreach ($produits as $p){
            $arrayObjet[] = new Produit($p);
        }

        return $arrayObjet;
    }

    public function saveProduitBdd(Produit $produit){
        if(empty($produit->getId())){
            return $this->insertProduit($produit);
        }else{
            return $this->updateProduit($produit);
        }
    }

    private function insertProduit(Produit $produit){
        $query="INSERT INTO produit SET nom=:nom, description=:description, prix=:prix, couleur=:couleur";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'nom'=>$produit->getNom(),
            'description' => $produit->getDescription(),
            'prix'=>$produit->getPrix(),
            'couleur' => $produit->getCouleur()
        ));
        return $pdo->rowCount();
    }

    private function updateProduit(Produit $produit){
        $query = 'UPDATE produit SET nom=:nom, description=:description, prix=:prix, couleur=:couleur WHERE id=:id';
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'nom'=>$produit->getNom(),
            'description' => $produit->getDescription(),
            'prix'=>$produit->getPrix(),
            'couleur' => $produit->getCouleur(),
            'id' => $produit->getId()
        ));
        return $pdo->rowCount();
    }

    public function deleteProduit(Produit $produit){

        //Avec ON CASCADE DELETE plus besoin de ceci
        //$this->deleteAllPromotionFromProduit($produit);

        $object = $this->connexion->prepare('DELETE FROM produit WHERE id=:id');
        $object->execute(array(
            'id'=>$produit->getId()
        ));
        return  $object->rowCount();
    }
}