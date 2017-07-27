<?php
/**
 * Created by PhpStorm.
 * User: ferna
 * Date: 27/07/2017
 * Time: 11:10
 */

class CommentRepository
{
    private $connexion;

    public function __construct($connexion)
    {
        $this->connexion = $connexion;
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