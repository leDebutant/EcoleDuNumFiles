<?php



class Commercial
{
    private $id;
    private $nom;
    private $telephone;
    private $promotion_id;

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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getPromotionId()
    {
        return $this->promotion_id;
    }

    /**
     * @param mixed $promotion_id
     */
    public function setPromotionId($promotion_id)
    {
        $this->promotion_id = $promotion_id;
    }

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

    public function save(BddManager $bddManager){
        return $bddManager->getCommercialRepository()->saveCommercialBdd($this);
    }
}