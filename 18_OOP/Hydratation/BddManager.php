<?php

class BddManager
{
    private $connexion;

    public function __construct()
    {
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
        $this->getConnexion();

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
      $this->getConnexion();

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
      $this->getConnexion();
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
      $this->getConnexion();
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

      $this->getConnexion();
      $query="DELETE FROM produit WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$produit->getId()
        ));
        return $pdo->rowCount();
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

    public function getCommentById($id){
        $object = $this->connexion->prepare('SELECT *
        FROM comment WHERE id=:id');
        $object->execute(array(
            'id'=>$id
        ));
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($produits)){
            return new Comment($produits[0]);
        }
        return false;
    }

    public function saveComment(Comment $comment){
        if(empty($comment->getId()) == true ){
            $this->insertComment($comment);
        }else{
            $this->updateComment($comment);
        }
    }

    public function insertComment(Comment $comment){

        $this->getConnexion();
        $query="INSERT INTO comment SET comment=:comment, datecreation=NOW(), auteur=:auteur,promotion_id=:promotionId";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'comment'=>$comment->getComment(),
            'auteur' => $comment->getAuteur(),
            'promotionId' => $comment->getPromotionId()
        ));
        return $pdo->rowCount();
    }

    public function updateComment(Comment $comment){
        $this->getConnexion();
        $query="UPDATE comment SET comment=:comment, auteur=:auteur WHERE id=:id";
        $pdo = $this->connexion->prepare($query);
        $pdo->execute(array(
            'id' =>$comment->getId(),
            'comment'=>$comment->getNom(),
            'auteur' => $comment->getAuteur()
        ));
        return $pdo->rowCount();
    }
}

 ?>
