<?php

class BddManager
{

    private $connexion;

    public function __construct()
    {
        $this->getConnexion();
    }

    public function getConnexion()
    {
        if(empty($this->connexion)){
            $this->connexion = new PDO('mysql:host=localhost;dbname=ikea;charset=UTF8','root','');
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
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
            $this->insertProduct($produit);
        }else{
            $this->updateProduct($produit);
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

    public function savePromotionBdd(Promotion $promotion){
        if(empty($promotion->getId())){
            $this->insertPromotion($promotion);
        }else{
            $this->updatePromotion($promotion);
        }
    }

    public function deleteProduit(Produit $produit){

        $this->deleteAllPromotionFromProduit($produit);

        $object = $this->connexion->prepare('DELETE FROM produit WHERE id=:id');
        $object->execute(array(
            'id'=>$produit->getId()
        ));
        return  $object->rowCount();
    }

    private function insertPromotion(Promotion $promotion){
        $query="INSERT INTO promotion SET titre=:titre, pourcentage=:pourcentage, product_id=:produitId";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'titre'=>$promotion->getTitre(),
            'pourcentage' => $promotion->getPourcentage(),
            'produitId'=>$promotion->getProduitId()
        ));
        return $pdo->rowCount();
    }

    private function updatePromotion(Promotion $promotion){
        $query = 'UPDATE promotion SET titre=:titre, pourcentage=:pourcentage, produit_id=:productId WHERE id=:id';
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'titre'=>$promotion->getTitre(),
            'pourcentage' => $promotion->getPourcentage(),
            'productId'=>$promotion->getProduitId()
        ));
        return $pdo->rowCount();
    }

    public function getMesPromotionsFromProduit(Produit $produit){
        $object = $this->connexion->prepare('SELECT * FROM promotion WHERE produit_id=:id');
        $object->execute(array(
            'id'=>$produit->getId()
        ));
        $proms = $object->fetchAll(PDO::FETCH_ASSOC);

        if(empty($proms)){
            return NULL;
        }

        foreach ($proms as $p){
            $arrayObjet[] = new Promotion($p);
        }

        return $arrayObjet;
    }

    public function deleteAllPromotionFromProduit(Produit $produit){
        $promotions = $this->getMesPromotionsFromProduit($produit);
        if(!empty($promotions)){
            foreach ($promotions as $p){
                $r = $p->delete($this);
                if(empty($r)){
                    return false;
                }
            }
        }
        return true;
    }


    public function deletePromotion(Promotion $promotion){
        $object = $this->connexion->prepare('DELETE FROM promotion WHERE id=:id');
        $object->execute(array(
            'id'=>$promotion->getId()
        ));
        return  $object->rowCount();
    }


}