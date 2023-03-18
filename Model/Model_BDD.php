<?php
class Model_BDD {
    private $conn;
     // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
     private function getBdd() {
        if ($this->conn == null) {
        // Création de la connexion
        try{
            require_once('config/Config_BDD.php');  
            $this->conn = new PDO("mysql:host=localhost;dbname=td6", DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie !";
        }catch(PDOException $e) {
            echo "Erreur de connexion : ";
        }
        }
        
        return $this->conn;
    }

    function execute_query($sql) {
        $conn=$this->getBdd();
        $result = $conn->query($sql);
        if (!$result) {
            die('Erreur d\'exécution de la requête : ');
        }
    }
}


?>
