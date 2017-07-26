<?php


class CommercialRepository
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function saveCommercialBdd(Commercial $commercial){
        if(empty($commercial->getId())){
            return $this->insertCommercial($commercial);
        }else{
            return $this->updateCommercial($commercial);
        }
    }

    public function insertCommercial(Commercial $commercial){
        $query="INSERT INTO commercial SET nom=:nom, telephone=:telephone, promotion_id=:promotionId";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'nom'=>$commercial->getNom(),
            'telephone' => $commercial->getTelephone(),
            'promotionId'=>$commercial->getPromotionId()
        ));
        return $pdo->rowCount();
    }

    public function updateCommercial(Commercial $commercial){
        $query = 'UPDATE commercial SET nom=:nom, telephone=:telephone, promotion_id=:promotionId WHERE id=:id';
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'nom'=>$commercial->getTelphone(),
            'telephone' => $commercial->getTelephone(),
            'promotionId'=> $commercial->getPromotionId()
        ));
        return $pdo->rowCount();
    }

    public function deleteCommercial(Commercial $commercial){
        $object = $this->connexion->prepare('DELETE FROM commercial WHERE id=:id');
        $object->execute(array(
            'id'=>$commercial->getId()
        ));
        return  $object->rowCount();
    }
}