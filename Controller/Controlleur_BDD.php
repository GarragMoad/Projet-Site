<?php
require_once('Model/Model_BDD.php');

class Controlleur_BDD {
    private $model;

    function __construct() {
        $this->model = new Model_BDD();
    }

    function Remplir_Table_Etudiant()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Récupération des données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email= $_POST['email'];
            $pwd= $_POST['password'];
            $profession = $_POST['Profession'];;
            if($profession =='Etudiants')
            {
            $sql = "INSERT INTO etudiant (Nom,Prenom,email,Mot_De_Passe) VALUES ('$nom','$prenom','$email','$pwd')";
            $this->model->execute_query($sql);
             
            // Redirection vers la page de liste des contacts
            header('Location: ../Vue/Accueil.php');
            exit();
            }
            else{
                $sql = "INSERT INTO Professeur (Nom,Prenom,email,Mot_De_Passe) VALUES ('$nom','$prenom','$email','$pwd')";
                $this->model->execute_query($sql);
                 
                // Redirection vers la page de liste des contacts
                header('Location: ../Vue/Accueil.php');
                exit();

            }
        } else {
            // Si la requête n'est pas de type POST, on redirige vers la page de formulaire
            header('Location: ../Vue/Accueil.php');
            exit();
        }
    }
}
?>

