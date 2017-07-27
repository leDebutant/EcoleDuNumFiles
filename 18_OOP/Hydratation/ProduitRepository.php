<?php


class ProduitRepository
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
    }

    public function getProduitById($id){
        $object = $this->connexion->prepare('SELECT *
        FROM produit WHERE id=:id');
        $object->execute(array(
            'id'=>$id
        ));
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($produits)){
            return new Produit($produits[0]);
        }
        return false;
        //Ici nous sommes en train de passer un tableau!!
    }

    /**
     * getAllProduit retourne un tableau avec un object
     * Produit dans chaque index (ligne)
     */

    public function getAllProduit(){

        $object = $this->connexion->prepare('SELECT *
      FROM produit');
        $object->execute(array());
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);


        if(!empty($produits)){
            $tableauProduit=[];
            foreach($produits as $tableauDonneesProduit){
                $tableauProduit[]=new Produit($tableauDonneesProduit);
            }
            return $tableauProduit;
        }
        return false;
    }
    /***
     * dans save(Produit $produit) "Produit"
     * veut dire qu'on oblige le parametre
     * à être un objet de la classe Produit
     */
    public function saveProduit(Produit $produit){
        if(empty($produit->getId()) == true ){
            $this->insertProduit($produit);
        }else{
            $this->updateProduit($produit);
        }
    }

    public function insertProduit(Produit $produit){
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

    public function updateProduit(Produit $produit){
        $query="UPDATE produit SET nom=:nom, description=:description, prix=:prix, couleur=:couleur WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$produit->getId(),
            'nom'=>$produit->getNom(),
            'description' => $produit->getDescription(),
            'prix'=>$produit->getPrix(),
            'couleur' => $produit->getCouleur()
        ));
        return $pdo->rowCount();
    }

    public function deleteProduit(Produit $produit){

        /**
         * Effacer les entités filles (SQL)
         * Ceci n'est pas nécessaire si notre clé contrainte est déclarée
         * avec ON DELETE CASCADE. Par contre attention si vous avez
         * des fichiers comme des photos vous devez les effacer ici
         * tout comme les fichiers log.txt
         */
        $mesPromotions = $produit->getMesPromotions($this);
        if(!empty($mesPromotions)){
            foreach($mesPromotions as $objetPromotion){
                /**
                 * Alfonso: chaque objetPromotion à sa fonction delete
                 * pour qu'elle marche il faut qu'elle ait le BDD
                 */
                $objetPromotion->delete($this);
            }
        }

        $query="DELETE FROM produit WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$produit->getId()
        ));
        return $pdo->rowCount();
    }
}