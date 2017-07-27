<?php
/**
 * Created by PhpStorm.
 * User: ferna
 * Date: 27/07/2017
 * Time: 11:10
 */

class PromotionRepository
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getPromotionsByProduit(Produit $produit)
    {
        $this->getConnexion();
        $query = "SELECT * FROM promotion WHERE produit_id=:id";
        $object = $this->connexion->prepare($query);
        $object->execute(array(
            'id'=>$produit->getId()
        ));
        $promotions = $object->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($promotions)){
            $tableauPromotions=[];
            foreach ($promotions as $tableauDonneesPromotions){
                $tableauPromotions[] = new Promotion($tableauDonneesPromotions);
            }
            return $tableauPromotions;
        }
        return false;
    }

    public function deletePromotion(Promotion $promotion){
        $object = $this->connexion->prepare('DELETE FROM promotion WHERE id=:id');
        $object->execute(array(
            'id'=>$promotion->getId()
        ));
        return  $object->rowCount();
    }
}