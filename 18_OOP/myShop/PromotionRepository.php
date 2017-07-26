<?php


class PromotionRepository
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function savePromotionBdd(Promotion $promotion){
        if(empty($promotion->getId())){
            return $this->insertPromotion($promotion);
        }else{
            return $this->updatePromotion($promotion);
        }
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