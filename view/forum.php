<?php $titre='LearnHub - Forum de communication'?>
<?php $CSS = '../style/forum.css'?>
 <?php $JS = '../assets/js/forum.js'?> 
<?php $lienIndex = '../'?>
<?php $lienCnx = 'connexion.php'?>
<?php $lienIns = 'inscription.php'?>
<?php $lienCtct = 'contact.php'?>

<?php require "header.php"; ?>
<?php ob_start(); ?> 

<script src="../assets/js/forum.js"></script>

<div class="wrapper">

<div class="sidebar">
    <h3>Canals</h3>
  <ul>
    <li><a href="#" class="liste">Groupe 1</a></li>
    <li><a href="#" class="liste">Groupe 2</a></li>
    <li><a href="#" class="liste" >Groupe 3</a></li>
    <li><a href="#" class="liste">Groupe 4</a></li>
  </ul>
</div>

<div class="content">
    <div class="main-content">
      <div class="messages">
        <!-- Afficher les messages ici -->
         <?php echo $All_Messages ?> 
      </div>
      <div class="input-bar">
        <input type="text" placeholder="Tapez votre message ici" id="Msg_envoie">
        <button id="Bouton_envoie">Envoyer</button>
      </div>
    </div>
  </div>
</div>

<?php require "footer.php"; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'commun.php'; ?>