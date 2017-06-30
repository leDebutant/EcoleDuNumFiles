<?php
/* PDO est une librairie qui nous permettra
de communiquer avec notre base de données
D'autres existent comme MySQLi...
 */
$connexion = new PDO('mysql:host=localhost;dbname=ecoledunum;charset=UTF8','root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//LA commande suivante $query est le SQL que nous
// avons vu dans MySQL Workbench
// $query ='SELECT * FROM user';
/* VERSION 1 */
// $object = $connexion->query($query);
// //'l'option PDO::FETCH_ASSOC rend un array assoc
// while($donnees = $object->fetch(PDO::FETCH_ASSOC)){
//     $users[] = $donnees;
// }

/* VERSION 2 avec PREPARE SANS PARAMETRES */
// $object = $connexion->prepare('SELECT * FROM user');
// $object->execute(array());
// $users = $object->fetchAll(PDO::FETCH_ASSOC);

/* VERSION 2 avec un parametre */
// La différence avec la requête précédente c'est
// le paramètre qu'on va identifier avec deux points
// devant :userId (on aurait pu mettre :marcelId) mais
// mais nous devons mettre cette même clé dans l'array
// suivant (dans execute)
$pdo = $connexion->prepare('SELECT uPassword FROM user WHERE id=:userId AND username=:monUsername');
$pdo->execute(
  array(
    'userId'=>2,
    'monUsername'=>'apocalypse'
  ));
$user = $pdo->fetchAll(PDO::FETCH_ASSOC);

echo $user[0]['uPassword'];
die();

// $pdo = $connexion->prepare('INSERT INTO user SET username=:moi, email=:email, uPassword=:password ');
// $pdo->execute(array(
//   'moi'=>'Paul',
//   'email' => 'paul@lidem.eu',
//   'password'=>'monPassword'
// ));
// $result = $pdo->rowCount();

// $pdo = $connexion->prepare('UPDATE user SET uPassword=:password WHERE id=:id');
// $pdo->execute(array(
//   'password'=>'passwordsecret',
//   'id'=>2
// ));
// $result = $pdo->rowCount();
// result rendra le nombre de ligne affectées

// $pdo = $connexion->prepare("DELETE FROM user WHERE id=:id");
// $pdo->execute(array('id'=>5));
// // numero de lignes affectées
// $result = $pdo->rowCount();







 ?>
