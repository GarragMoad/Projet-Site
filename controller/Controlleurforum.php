<?php
require_once('model/modelBDD.php');
require_once('model/message.php');

class controlleurforum {
    private $model;
    private $message;
    private $messages;


    function __construct() {
        $this->model = new ModelBDD();
        $this->messages=array();
    }

    function Ajouter_message() {
       
        if (isset($_POST['message'])) {
            $message = $_POST['message'];
            $id_utilisateur=$_SESSION['id_utilisateur'];
            $date = date('Y-m-d H:i:s');
            $resultat = $this->model->execute_query("SELECT * FROM messages WHERE message='$message'");
            if($resultat && $resultat->rowCount()>0){
                return;
            }
            $req = $this->model->execute_query("INSERT INTO messages (id_utilisateur, id_groupe, message, date) VALUES ('$id_utilisateur', '0', '$message', '$date')");
        }  
    }

    function get_messages($id_groupe):string
    {
        $All_Messages='';
        $utilisateur='';
        $sql=$this->model->execute_query("SELECT * FROM messages WHERE id_groupe='$id_groupe'");
        if($sql->rowCount()>0)
                {
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) 
                    {
                        $message=$row['message'];
                        $date=$row['date'];
                        $id_utilisateur=$row['id_utilisateur'];

                        $rqt=$this->model->execute_query("SELECT Nom,Prenom FROM utilisateur WHERE id=' $id_utilisateur'");
                        if($rqt->rowCount()>0)
                        {
                            while ($row = $rqt->fetch(PDO::FETCH_ASSOC)) 
                            {
                                $Nom=$row['Nom'];
                                $Prenom=$row['Prenom'];
                                $utilisateur= $Nom ." ".$Prenom;
                            }
                        }
                        $this->message= new message($message,$date,$utilisateur);
                        $All_Messages=$All_Messages.$this->message->My_message()."<br>";

                    }
                }
            return $All_Messages;
        
    }
    public function render() {
        $All_Messages = $this->get_messages(0);
        require_once('view/forum.php');
    }
}
?>
