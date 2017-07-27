<?php

class BddManager
{
    private $connexion;
    private $produitRepository;
    private $promotionRepository;
    private $commentRepository;

    /**
     * @return mixed
     */
    public function getProduitRepository()
    {
        return $this->produitRepository;
    }

    /**
     * @param mixed $produitRepository
     */
    public function setProduitRepository($produitRepository)
    {
        $this->produitRepository = $produitRepository;
    }

    /**
     * @return mixed
     */
    public function getPromotionRepository()
    {
        return $this->promotionRepository;
    }

    /**
     * @param mixed $promotionRepository
     */
    public function setPromotionRepository($promotionRepository)
    {
        $this->promotionRepository = $promotionRepository;
    }

    /**
     * @return mixed
     */
    public function getCommentRepository()
    {
        return $this->commentRepository;
    }

    /**
     * @param mixed $commentRepository
     */
    public function setCommentRepository($commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function __construct()
    {
        $this->connexion = Connexion::getConnexion();
        $this->setProduitRepository(new ProduitRepository($this->connexion));
        $this->setPromotionRepository(new PromotionRepository($this->connexion));
        $this->setCommentRepository(new CommentRepository($this->connexion));
    }

}

 ?>
