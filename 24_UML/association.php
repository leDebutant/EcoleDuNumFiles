<?php
/*
 * Association: c'est un lien, une relation entre deux classes
 * */

class BddManager
{
    public function save(Etudiant $etudiant){

    }
}

class Etudiant
{

}

$etudiant = new Etudiant();
$bdd = new BddManager();
$bdd->save($etudiant);
