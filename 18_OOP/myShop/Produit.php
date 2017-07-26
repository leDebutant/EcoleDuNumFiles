<?php

class Produit
{
    private $id;
    private $nom;
    private $description;
    private $prix;
    private $couleur;
    private $mesPromotions;


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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function hydrate(array $donneesPdo){

        if(empty($donneesPdo) == false){
            foreach ($donneesPdo as $key => $value){
                $key = preg_replace("#_#","",$key);
                $method = "set".ucfirst($key);
                if(method_exists($this,$method)){
                    $this->$method($value);
                }
            }
        }
    }

    public function save(BddManager $bddManager){
        $bddManager->getProduitRepository()->saveProduitBdd($this);
    }

    public function getMesPromotions(BddManager $bddManager){
        if(empty($this->getId()) == false){
            $this->mesPromotions = $bddManager->getPromotionRepository()->getMesPromotionsFromProduit($this);
        }
    }

    public function deleteProduit(BddManager $bddManager){
        $bddManager->getProduitRepository()->deleteProduit($this);
    }
}