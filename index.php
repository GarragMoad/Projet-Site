<?php

require('Controller/Controlleur_BDD.php');
require_once('Vue/Accueil.php');

try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == "Inscription") {
        $My_Object=new Controlleur_BDD();
        $My_Object->Remplir_Table_Etudiant();
      }
    else{
        throw new Exception("Argument non valide");
      }
    }
}
catch (Exception $e) {
    echo ($e->getMessage());
}
