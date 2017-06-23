<?php
//exercice Form exo 3
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
  echo ($nom." ".$prenom);

// exercice Form exo 4
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
  echo ($nom." ".$prenom);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
  </head>
  <body>
    <header>
      <form  action="user.php" method="POST">
        <label for="sexe"></label>
        <select name="sexe" id="sexe" class="sexe">
          <option value="Sexe" selected="selected">Civilit&eacute;</option>
          <option value="Madame">Madame</option>
          <option value="Monsieur">Monsieur</option>
          <option value="Mademoiselle">Mademoiselle</option>
        </select>
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom">
        <button type "submit" name="button">envoyer</button>
      </form>
    </header>
    <div id="ligne_1">





  </body>
</html>
