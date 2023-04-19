<?php
    require_once('model/modelBDD.php');
class ControlleurAdmin
    {
      private $model;
    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function AjoutCour_Admin(){
    
        echo "Connected successfully";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $titre = $_POST['titre'];
            $categorie = $_POST['categorie'];
            $image = $_POST['image'];
            $prix = $_POST['prix'];
            $note = $_POST['note'];
            $chemin = $_FILES['fichier']['name']; 
            
                $sql = "INSERT INTO cours (titre,path,categorie,image,prix,note) VALUES ('$titre','$chemin','$categorie','$image','$prix','$note')";
                $this->model->execute_query($sql);
           return true; 
        }
    }
    
    function AjoutUser_Admin(){
    
        echo "Connected successfully";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            
                $sql = "INSERT INTO utilisateur (nom,prenom,email,mdp) VALUES ('$nom','$prenom','$email','$password')";
                $this->model->execute_query($sql);
            return true;
        }
    }


    function modif_Admin(){
    
        echo "Connected successfully";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $id = $_POST['id'];
            $username = $_POST['nom'];
            $newprenom = $_POST['Prénom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
                $sql ="UPDATE utilisateur SET nom='$username',prenom='$newprenom', email='$email', mdp='$password' WHERE id=$id";
        
                $this->model->execute_query($sql);
                return true; 
        }
    }
    function Supp_Admin(){
    
        echo "Connected successfully";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $id_utilisateur = $_POST['id'];
            $requete = "DELETE FROM utilisateur WHERE id = $id_utilisateur ";
            $this->model->execute_query($requete);
            return true; 
        }
    }
   

    }
?> 