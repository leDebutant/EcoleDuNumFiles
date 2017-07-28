<?php

abstract class PdoManager
{

    public static $nbCount;
    /**
     * Ici on est sensé implémenter la logique CRUD
     * Create, Read, Update et delete
     * mais dans notre projet par exemple forum nous n'avons que select et insert
     */

    public function select($query,array $array,$fetchall=true){
        // On peut implémenter ici un compteur de requête pour savoir combien de resource on consomme
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->connexion->prepare($query);
        $pdo->execute($array);
        if($fetchall===true){
            $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $data = $pdo->fetch(PDO::FETCH_ASSOC);
        }

        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }

    public function insert($query,array $array)
    {
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        $this->lastInsertId = $this->db->lastInsertId();
        return $pdo->lastInsertId();
    }

    public function update($query, array $array){
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        $this->lastInsertId = $this->db->lastInsertId();
        return $pdo->rowCount();
    }

    public function delete($query, array $array){
        self::$nbCount++;
        $this->lastQuery=$query;
        $pdo = $this->db->prepare($query);
        $pdo->execute($array);
        $this->lastInsertId = $this->db->lastInsertId();
        return $pdo->rowCount();
    }

    /***
     * D'autres fonction comme pouvoir insérer une query en brut sans paramètres
     * etc...
     */

}