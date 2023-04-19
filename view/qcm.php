<?php session_start();?>
<?php $titre = 'LearnHub - QCM'?>
<?php $CSS = '../style/qcm.css'?>
<?php $lienIndex = '../'?>
<?php $lienCnx = 'connexion.php'?>
<?php $lienIns = 'inscription.php'?>
<?php $lienCtct = 'contact.php'?>

<?php ob_start(); ?> 
    <div class="container" id="container">
        <?php require "header.php"; ?>
        <div class="container-qcm" id="container-qcm">
            <div class="container-form-qcm" id="container-form-qcm">
                <h1 class="titre-qcm" id="titre-qcm">Quiz : Question &agrave; choix multiples</h1>
                <form method="post" class="form-qcm" id="form-qcm">
                    <?php
                        //charger le fichier XML
                            $xml = simplexml_load_file('../assets/xml/qcm.xml');
                            //parcourir les questions et afficher les options
                            foreach($xml->question as $question)
                            {
                                $id_question = (string) $question['id'];
                                $text_question = (string) $question->text;
                                echo "<br><span class='titre-quest'>$text_question</span><br>";
                                $lettres_options = ['A', 'B', 'C'];
                                foreach($question->option as $option)
                                {
                                    $id_option = (string) $option['id'];
                                    $text_option = (string) $option;
                                    $lettre_option = array_shift($lettres_options);
                                    echo "<label><input type='radio' name='reponse[$id_question]' value='$id_option'> $text_option</label><br>";
                                }
                            }
                            echo "<br>";
                            require_once('../controller/controlleurQCM.php');
                            echo "<br>";
                    ?>
                    <button class="button-qcm" id="button-qcm" type="submit">Soumettre</button>
                </form>
            </div>
        </div>
        
        <?php require "footer.php"; ?>
        
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>