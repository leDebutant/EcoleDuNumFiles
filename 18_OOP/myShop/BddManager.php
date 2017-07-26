<?php

class BddManager
{

    public $connexion;
    private $produitRepository;
    private $promotionRepository;
    private $commercialRepository;

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
    public function getCommercialRepository()
    {
        return $this->commercialRepository;
    }

    /**
     * @param mixed $commercialRepository
     */
    public function setCommercialRepository($commercialRepository)
    {
        $this->commercialRepository = $commercialRepository;
    }



    public function __construct()
    {
        $this->connexion = Connexion::getConnexion();
        $this->setProduitRepository(new ProduitRepository($this->connexion));
        $this->setPromotionRepository(new PromotionRepository($this->connexion));
        $this->setCommercialRepository(new CommercialRepository($this->connexion));
    }

}