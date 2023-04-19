<?php $titre = 'LearnHub - Inscription/Connexion'?>
<?php $CSS = '../style/inscription.css'?>

<?php ob_start(); ?>

    <?php require 'cnx-ins.php'; ?>

    <script src="../assets/js/inscription.js"></script>
    <script src="../assets/js/inscriptionValid.js"></script>
    <script src="../assets/js/connexionValid.js"></script>

    <?php
        try 
        {
            if (isset($_GET['error'])) 
            {
                if ($_GET['error'] == "emaildejasouscrit") 
                {
                    echo "<script>";
                    echo "console.log('error');";
                    echo "messageInsMail.innerHTML = 'Adresse d&eacute;ja souscrite';";
                    echo "emailInputIns.style.borderBottom = 'solid 1px hsl(0, 100%, 50%)';";
                    echo "messageInsMail.style.display = 'block';";
                    echo "emailInputIns.focus();";
                    echo "</script>";
                }
                else if ($_GET['error'] == "emailnonsouscrit") 
                {
                    echo "<script>";
                    echo "console.log('error');";
                    echo "messageCnxMail.innerHTML = 'Adresse non souscrite';";
                    echo "emailInputCnx.style.borderBottom = 'solid 1px hsl(0, 100%, 50%)';";
                    echo "messageCnxMail.style.display = 'block';";
                    echo "emailInputCnx.focus();";
                    echo "</script>";
                }
            }
        }
        catch (Exception $e) 
        {
            echo ($e->getMessage());
        }
    ?>

<?php $contenu= ob_get_clean();?>
<?php require 'commun.php'; ?>