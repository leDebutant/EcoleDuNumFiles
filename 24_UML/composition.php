<?php
/**
 * La composition est une forme d'aggrégation plus stricte. C'est à dire qu'elles ont un cycle vie liée. Quand l'entité "propriétaire" est créée l'entité contenu l'est également (généralement). Les classes contenues peuvent être instantiées ultérieurement.
 * Quand l'entité propriétaire est détruite les entités contenues le sont également.
 */

class Factory
{
    private $module1;
    private $module2;

    private $module3;

    public function __construct()
    {
        $this->module1 = new Module1();
        $this->module2 = new Module2();
    }

    public function setModuleRestant()
    {
        $this->module3 = new Module3();
    }
}

class Module1
{

}
class Module2
{

}

class Module3
{

}