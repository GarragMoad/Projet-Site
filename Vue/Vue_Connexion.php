<?php $titre = 'Connexion '?>
 <?php $CSS = '../Style/Connexion.css '?>

<?php ob_start(); ?>
<form id="login-form">
  <label for="username">Nom d'utilisateur:</label>
  <input type="text" id="username" name="username" required>
  <br>
  <label for="password">Mot de passe:</label>
  <input type="password" id="password" name="password" required>
  <br>
  <button type="submit">Se connecter</button>
</form>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Commun.php'; 