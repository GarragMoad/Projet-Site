<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Initialisation du score
    $score = 0;
  
    // Récupération des réponses de l'utilisateur
    $reponses_utilisateur = $_POST['reponse'];
  
    // Vérification des réponses de l'utilisateur
    if($reponses_utilisateur['q1'] == 'A'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q2'] == 'B'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q3'] == 'A'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q4'] == 'C'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q5'] == 'A'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q6'] == 'A'){
        $score++; // Incrémentation du score si la réponse est correcte
    }
    if($reponses_utilisateur['q7'] == 'A'){
        $score++; // Incrémentation du score si la réponse est correcte
    }

    // Affichage du score
    $nombre_questions = 7;
    /* echo "Vos réponses :"; */
    echo "Votre score est de $score / $nombre_questions. <br>";
    
    // Message de félicitation ou d'encouragement
    if($score == $nombre_questions){
        echo "Félicitations :) , vous avez répondu correctement à toutes les questions!";
    } else {
        echo "Malheureusement, vous avez répondu incorrectement à ".($nombre_questions-$score)." question(s).";
    }
}
?>