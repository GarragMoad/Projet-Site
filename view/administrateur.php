<?php $titre = 'LearnHub - Online Learning '?>
<?php $CSS = '../style/admin.css '?>

<?php ob_get_clean();?>
<div>
    <h1>
      Administration des utilisateurs
      <a href="../index.php?action=deconnexion">
        <div class="container-sign-up" id="container-sign-up">
            <span class="sign-up" id="sign-up">Sign out</span>
        </div>
      </a>
    </h1>
    <div class="form-container">
      <form action="../index.php?action=admin_ajout" method="post" class="add">
        <h2>Ajouter un utilisateur</h2>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password">
        <input type="submit"  value="Ajouter">
      </form>
      <form action="../index.php?action=admin_modif"  method="post">
        <h2>Modifier un utilisateur</h2>
        <label for="id">ID de l'utilisateur :</label>
        <input type="hidden" name="action" value="modifier">
        <input type="text" id="id" name="id">
        <label for="nom">Nouveau nom :</label>
        <input type="text" id="nom" name="nom">
        <label for="Prénom">Nouveau Prénom :</label>
        <input type="text" id="Prénom" name="Prénom">
        <label for="email">Nouvel email :</label>
        <input type="email" id="email" name="email">
        <label for="password">Nouvel Mot de passe :</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Modifier">
      </form>
      <form action="../index.php?action=admin_supprim"  method="post" class="delete">
        <h2>Supprimer un utilisateur</h2>
        <label for="id">Id de l'utilisateur :</label>
        <input type="hidden" name="action" value="supprimer">
        <input type="text" id="id" name="id">
        <input type="submit" value="Supprimer">
      </form>
    </div>
    <div class="cours">
        <form action="../index.php?action=admin_cours"  method="post" enctype="multipart/form-data">
        <h2>Ajouter un cours PDF</h2>
            <input type="hidden" name="action" value="ajouter">
            <input type="text" id="titre" name="titre" placeholder="Titre">
            <input type="text" id="categorie" name="categorie" placeholder="Catégorie">
            <input type="text" id="image" name="image" placeholder="Image">
            <input type="text" id="prix" name="prix" placeholder="Prix">
            <input type="text" id="note" name="note" placeholder="Note">
            <input type="file" id="fichier" name="fichier">
            <input type="submit" value="Ajouter">
          </form>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'commun.php'; ?>
