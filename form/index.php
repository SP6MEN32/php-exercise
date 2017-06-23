<!-- exercice Form exo 5 & 6 & 7 & 8 -->
<?php
  if ($_POST['nom']===null || $_POST['prenom']===null || $_POST['sexe']===null || pathinfo($_POST['fichiers'])['extension'] !='pdf'){
    echo '<form  action="index.php" method="POST">
    <label for="sexe"></label>
    <select name="sexe" id="sexe" class="sexe">
    <option>Civilit&eacute;</option>
    <option>Madame</option>
    <option>Monsieur</option>
    <option>Mademoiselle</option>
    </select>
    <label for="nom">nom</label>
    <input type="text" name="nom" id="nom"/>
    <label for="prenom">prenom</label>
    <input type="text" name="prenom" id="prenom"/>
    <input type="file" name="fichiers"/>
    <button type "submit" name="button">envoyer</button>
    </form>';
  }
  else {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $path_parts = pathinfo($_POST['fichiers']);
    $path_extension = $path_parts['extension'];
    echo($nom." ".$prenom." ".$sexe." ".$path_extension);
  }
 ?>
