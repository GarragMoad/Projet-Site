
 <?php $titre = 'Inscription '?>
 <?php $CSS = '../Style/Inscription.css '?>
 <?php $JS = '../Style/inscription.js'?>

<?php ob_start(); ?>
	
<div class="container">
	<div class="form">
	<h1>Coursely</h1>
	<h2>Inscription</h2>
	<form action="http:../index.php?action=Inscription" method="post"  >

        <input type="text" name="nom" placeholder="Nom" id="m_nom" required><br><br>

        <input type="text" name="prenom" placeholder="Prenom" id="m_prenom" required><br><br>

        <input type="email" name="email" placeholder="email" id="m_email" required><br><br>
		
        <input type="password" name="password" placeholder="Mot de passe" id="m_password" required><br><br>
		

        <input type="password" name="password-confirm" placeholder="Confirmez votre mot de passe" id="m_password-confirm" required><br><br>
        
        <select name="Profession" id="m_Profession" required>
              <option value="" selected disabled> Vous êtes?</option>
              <option value="Professeur"> Etudiants</option>
              <option value="Etudiant"> Enseignants</option>
            
          </select>
          
             <br><br>

        <input type="submit" name="send" value="Inscription" id="Envoi_Formulaire"><br><br>
        <input type="submit1" name="send" value="Connexion"><br><br>
    </form>
    </div>
	<div class="image">
		<img src="../Media/Inscription.jpg">
	</div>
	</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Commun.php'; 
