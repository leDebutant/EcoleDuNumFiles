<?php
    include_once("model/fonctions.php");
    $page = getPage();

    switch ($page) {
      case 'login':
        //1) dans un premier temps avoir nos données
        //2) remplir notre template avec ces données
        // 2) on complete le template avec nos variables
        include("views/login.php");
        break;

      case 'wall':
        $user = getUser();
        $description = getDescription();
        include("views/wall.php");
        break;

        // Vous allez créer une page additionnelle
        // avec un formulaire qui renvoie vers un
        // service et qui retourne un feedback
        // que vous aller récuperer avec un get
        // Aussi dans cette même page vous allez
        // afficher le nombre d'utilisateurs sur le
        // site
      case "formulaire": // views/formulaire.php
        $feedback = getFeedback();
        $nombreUtilisateur = getNombreUtilisateurs();
        // var_dump($feedback);
        // die();
        include("views/formulaire.php");
        break;

      // Créer une nouvelle page (juste un template)
    }

 ?>
