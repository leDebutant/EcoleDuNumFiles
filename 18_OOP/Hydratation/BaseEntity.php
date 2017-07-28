<?php
/**
 * Created by PhpStorm.
 * User: ferna
 * Date: 27/07/2017
 * Time: 13:50
 */

abstract class BaseEntity
{

    /**
     * Value Assigment, les français à mon avis ont lancés le terme hydratation
     * Mais c'est assigner des valeurs aux attributs de notre objet.
     *
     * Similaire à ce que vous avez fait dans votre Challenge Note avec Pierre
     * avec un array_push();
     *
     * Mais une fonction de la sorte nous évite de tous retapper à chaque fois.
     */
    public function hydrate(array $donneesPdo){

        if(empty($donneesPdo) == false){
            foreach ($donneesPdo as $key => $value){
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


    /***
     * @param BddManager $bddManager
     * Ici je vous poste une version amélliorée de l'hydrateur
     */
    public function hydrateV2(array $donneesTableau){

        if(empty($donneesTableau) == false){
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


}