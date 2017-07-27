<?php
//Produit.php

class Produit
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

    /**
     * Value Assigment, les français à mon avis ont lancés le terme hydratation
     * Mais c'est assigner des valeurs aux attributs de notre objet.
     *
     * Similaire à ce que vous avez fait dans votre Challenge Note avec Pierre
     * avec un array_push();
     *
     * Mais une fonction de la sorte nous évite de tous retapper à chaque fois.
     */
    public function hydrate($donnees)
    {
        foreach($donnees as $key => $value)
        {
            //ici je rajoute un remplacement des undescore
            $key = preg_replace("#_#","",$key);

            //donc pour l'index id on met le en majuscule et le
            // prefix avec "set"
            $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    /***
     * @param BddManager $bddManager
     * Ici je vous poste une version amélliorée de l'hydrateur
     */
    public function hydrateV2(array $donneesTableau){

        if(empty($donneesPdo) == false){
            foreach ($donneesTableau as $key => $value){
                $newString=$key;
                if(preg_match("#_#",$key)){
                    $word = explode("_",$key);
                    $newString = "";
                    foreach ($word as $w){
                        $newString.=ucfirst($w);
                    }
                }
                $method = "set".ucfirst($newString);
                if(method_exists($this,$method)){
                    $this->$method($value);
                }
            }
        }
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
