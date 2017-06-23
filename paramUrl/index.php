<?php
// exercice paramUrl exo 1
  $nom = $_GET['nom'];
  $prenom = $_GET['prenom'];
  echo ($nom." ".$prenom." ");

// exercice parUrl exo 2
  $age = $_GET['age'];
  if ($age) {
    echo ($age);
  }
  else {
   echo "il y a pas d'age indiquer !";
  }



 ?>
