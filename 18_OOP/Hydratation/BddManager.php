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

}

 ?>
