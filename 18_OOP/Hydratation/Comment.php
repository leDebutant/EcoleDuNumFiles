<?php


class Comment extends BaseEntity
{
    private $id;
    private $comment;
    private $datecreate;
    private $auteur;
    private $promotionId;

    public function __construct($donnees=array())
    {
        $this->hydrate($donnees);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
     * @param mixed $datecreate
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * @param mixed $promotionId
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;
    }

    public function save(BddManager $bdd){
        return $bdd->getCommentRepository()->saveComment($this);
    }

    public function delete(BddManager $bdd){
//        return $bdd->getCommentRepository()->deleteComment($this);
    }
}