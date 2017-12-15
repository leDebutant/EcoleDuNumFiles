<?php
/**
 * L'aggregation est une association qui va se definir par le fait que l'une des deux classes qui intéragissent entre elle, est défini comme la propriétaire.
 */


class EtudiantCollection
{
    private $EtudiantCollection = array();

    public function add(Etudiant $etudiant){
        $this->EtudiantCollection[] = $etudiant;
    }
}

class Etudiant
{

}

$etudiant = new Etudiant();
$bdd = new BddManager();
$bdd->save($etudiant);
