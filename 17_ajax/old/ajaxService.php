<?php

  $username = $_POST['username'];
  $email = $_POST['email'];


  $data["email"] = strtoupper($email);
  $data["username"] = strtoupper($username);
  $data["myData"]="Ceci est mon Service";

  echo json_encode($data);
 ?>
