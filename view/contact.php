<?php session_start();?>
<?php $titre = 'LearnHub - Nous Contacter'?>
<?php $CSS = '../style/contact.css'?>
<?php $lienIndex = '../'?>
<?php $lienCnx = 'connexion.php'?>
<?php $lienIns = 'inscription.php'?>
<?php $lienCtct = 'contact.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php require "header.php"; ?>

        <div class="container-center" id="container-center">
            <div class="container-center-child" id="container-center-child">
                <div class="container-contact-us" id="container-contact-us">
                    <span class="contact-us-title" id="contact-us-title">Nous Contacter</span>
                </div>
                <div class="container-contact-form" id="container-contact-form">
                    <form action="send" method="post" class="contact-form" id="contact-form" onsubmit="return validateFormCtct()">
                        <div class="container-name-mail" id="container-name-mail">
                            <div class="container-name" id="container-name">
                                <label for="name" class="name-label" id="name-label">Nom Complet</label>
                                <input type="text" name="name" class="name-input" id="name-input">
                            </div>
                            <div class="container-mail" id="container-mail">
                                <label for="email" class="email-label" id="email-label">Adresse &eacute;l&eacute;ctronique</label>
                                <input type="email" name="email" class="email-input" id="email-input">
                            </div>
                        </div>
                        <div class="container-subject" id="container-subject">
                            <label for="subject" class="subject-label" id="subject-label">Sujet</label>
                            <input type="text" name="subject" class="subject-input" id="subject-input">
                        </div>
                        <div class="container-message" id="container-message">
                            <label for="message" class="message-label" id="message-label">Message</label>
                            <textarea name="message" class="message-input" id="message-input"></textarea>
                        </div>
                        <div class="container-send" id="container-send">
                            <input type="submit" name="send" class="send-input" id="send-input" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
        
    </div>
    
<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>