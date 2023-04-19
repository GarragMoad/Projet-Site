<?php
session_start(); 

require_once('controller/controlleurInscription.php');
require_once('controller/controlleurConnexion.php');
require_once('controller/controlleurCours.php');
require_once('controller/controlleurforum.php');
require_once('controller/controlleuradmin.php');

try {
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {

            case "inscription":
                $inscri = new ControlleurInscription();
                if ($inscri->Remplir_Table_Etudiant()) {
                    header("Location: index.php");
                } else {
                    header("Location: view/inscription.php?error=emaildejasouscrit");
                }
                exit;
                break;

            case "connexion":
                $connect = new ControlleurConnexion();
                if ($connect->Recup_Client()) {
                    header("Location: index.php");
                } else {
                    header("Location: view/connexion.php?error=emailnonsouscrit");
                }
                exit;
                break;

            case "deconnexion":
                session_destroy();
                header("Location: index.php");
                exit;
                break;

            case "admin_cours":
                $connect = new ControlleurAdmin();

                if($connect->AjoutCour_Admin())
                {
                  header("Location: index.php");
                }
                else
                {
                  header("Location: view/test.php");
                }
                exit;

            case "admin_supprim":
                $connect = new ControlleurAdmin();

                if($connect->Supp_Admin())
                {
                header("Location: index.php");
                }
                else
                {
                header("Location: view/test.php");
                }
                exit;

            case "admin_ajout":
                $connect = new ControlleurAdmin();

                if($connect->AjoutUser_Admin())
                {
                header("Location: index.php");
                }
                else
                {
                header("Location: view/test.php");
                }
                exit;

            case "admin_modif":
                $connect = new ControlleurAdmin();

                if($connect->modif_Admin())
                {
                header("Location: index.php");
                }
                else
                {
                header("Location: view/test.php");
                }
                exit;
                
     

            case "forum" :
                // Instanciez le contrôleur du forum
                $forumController = new controlleurforum();

                // Récupérez les messages et passez-les à la vue
                $forumController->render();
                break;

            default:
                throw new Exception("Argument non valide");
        }
    } else {
        // la vérification si on est connecté en mode administrateur
        if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'root') {
            header("Location: view/administrateur.php");
            exit;
        } 
        if (isset($_POST['message'])) {
          $forumController = new controlleurforum();
          $forumController->Ajouter_message();
      }
        else {
            // l'affichage de la page d'accueil
            $cours = new ControlleurCours();
            $arrayCourses = $cours->recup4Cours();
            require_once('view/accueil.php');
        }
    }
} catch (Exception $e) {
    echo ($e->getMessage());
}
?>
