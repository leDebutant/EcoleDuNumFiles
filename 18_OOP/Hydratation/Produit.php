<?php
//Produit.php

class Produit extends BaseEntity
{
  private $id;
  private $nom;
  private $description;
  private $prix;
  private $couleur;
  private $mesPromotions = array();

    public function __construct($donnees = array())
    {
      $this->hydrate($donnees);
    }

    /**
     * accesseur mutateur ce que communémment nous appelons getters et les setters
     */

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

    public function setMesPromotions(array $promotions){
        $this->mesPromotions = $promotions;
    }

    public function save(BddManager $bddManager){
      //$this tout court sert à passer l'objet lui même
      $bddManager->getProduitRepository()->saveProduit($this);
    }

    public function delete(BddManager $bddManager){
      $bddManager->getProduitRepository()->deleteProduit($this);
    }

    public function getMesPromotions(BddManager $bddManager){
        //On va appeler la fonction du bddManager
        return $bddManager->getProduitRepository()->getPromotionsByProduit($this);
    }

}
 ?>
