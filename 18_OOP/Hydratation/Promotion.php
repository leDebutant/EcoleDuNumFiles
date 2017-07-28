<?php

class Promotion extends BaseEntity
{
    private $id;
    private $titre;
    private $pourcentage;
    private $produitId;

    public function __construct($donnees = array())
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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param mixed $pourcentage
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return mixed
     */
    public function getProduitId()
    {
        return $this->produitId;
    }

    /**
     * @param mixed $produitId
     */
    public function setProduitId($produitId)
    {
        $this->produitId = $produitId;
    }

    public function delete(BddManager $bddManager){
        return $bddManager->getPromotionRepository()->deletePromotion($this);
    }


    
}

 ?>
