<!-- <?php
  // exercice paramUrl exo 1
  $nom = $_GET['nom'];
  $prenom = $_GET['prenom'];
  echo ($nom." ".$prenom." ");
?> -->

<!-- <?php
  // exercice parUrl exo 2
  $age = $_GET['age'];
  if ($age) {
    echo ($age);
  }
  else {
   echo "il y a pas d'age indiquer !";
  }
?> -->

<!-- <?php
  // exercice paramUrl exo 3
  $dateDebut = $_GET['dateDebut'];
  $dateFin = $_GET['dateFin'];
  echo ("date de début"." ".$dateDebut." "."date de fin"." ".$dateFin);
?> -->

<!-- <?php
  //exercice paramUrl exo 4
  $langage = $_GET['langage'];
  $serveur = $_GET['serveur'];

  if (isset($_GET['langage']) AND isset($_GET['serveur']))
  {
  	echo 'Bonjour ' . $_GET['langage'] . ' ' . $_GET['serveur'] . ' !';
  }
  else
  {
  	echo 'Il faut renseigner un langage et un serveur !';
  }
?> -->

<!-- <?php
  //exercice paramUrl exo 5
  $semaine = $_GET['semaine'];

  if ($semaine==='12') {
    echo ($semaine);
  }
  else {
    echo "tu te fou de moi vilain hacker !";
  }
?> -->

<?php
  // exercice paramUrl exo 6
  $batiment = $_GET['batiment'];
  $salle = $_GET['salle'];

  if ($batiment==='12'&& $salle==='101'){
  	echo "tu es au bon endroit !";
  }
  else
  {
    echo "youpi tu es perdu !";
  }
  ?>
