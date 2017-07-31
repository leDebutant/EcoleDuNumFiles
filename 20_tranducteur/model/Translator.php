<?php

class Translator
{
    private $connexion;
    private $language;
    /***
     * Dans mon exemple je fais tout dans le même objet. Je sais
     * c'est pas bien mais on ira plus vite comme ça
     */
    private function getConnexion(){
        $this->connexion = new PDO('mysql:host=localhost;dbname=translation;charset=UTF8','root','');
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }



    public function launchTranslator(){
        $this->getConnexion();
    }

    public function translate($index){
        //Au préalable il faut absolument definir le language
        $object = $this->connexion->prepare('SELECT * FROM traduction WHERE indexTrans=:index AND langue=:langue');
        $object->execute(array(
            'index'=>$index,
            'langue'=>$this->language
        ));
        $trans = $object->fetchAll(PDO::FETCH_ASSOC);
        return $trans[0]['contenu'];
    }
}