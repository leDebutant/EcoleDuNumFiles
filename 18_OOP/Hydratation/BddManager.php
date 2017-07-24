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
        FROM product WHERE id=:id');
        $object->execute(array(
            'id'=>$id
        ));
        $produits = $object->fetchAll(PDO::FETCH_ASSOC);

        //Ici nous sommes en train de passer un tableau!!
        return new Produit($produits[0]);
    }

}

 ?>
