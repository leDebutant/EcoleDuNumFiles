<?php
// On va récupérer les param à l'aide de la
// variable globale $_POST
$username = strtoupper($_POST['username']);
$email = strtoupper($_POST['email']);

$data = array(
  "username"=>$username,
  "email" => $email
);

// json_encode nous transforme le tableau en format
// json
echo json_encode($data);

 ?>
