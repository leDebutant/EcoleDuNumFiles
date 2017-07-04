<?php


function connexion(){
    $connexion = new PDO('mysql:host=localhost;dbname=test;charset=UTF8','root','');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}


function addStudent($prenom,$nom ,$age, $email,$langue){
    $connexion = connexion();
     $pdo = $connexion->prepare('INSERT INTO user SET nom=:nom, prenom=:prenom, age=:age, email=:email, langue=:langue ');
     $pdo->execute(array(
       'prenom' => $prenom,
       'nom'=>$nom,
       'age' => $age,
       'email'=>$email,
       'langue'=>$langue,
     ));
     return $pdo->rowCount();
}



function getAllStudents(){
    $connexion = connexion();
     $object = $connexion->prepare('SELECT * FROM user');
     $object->execute(array());
     return $object->fetchAll(PDO::FETCH_ASSOC);
}