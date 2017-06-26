<!-- exercice globalVariable exo 2 -->

<?php

  session_start();
  echo '--exercice globalVariable exo 2--<ul>
          <li>' . $_SESSION['nom'] . '</li>
          <li>' . $_SESSION['prenom'] . '</li>
          <li>' . $_SESSION['age'] . '</li>
        </ul>';
?>
<!-- exercice globalVariable exo 4 -->
<?php
  setcookie('mdp', $_POST['mdp']);
  setcookie('login', $_POST['login']);
  echo $_COOKIE['mdp'] . ' ' . $_COOKIE['login'];
?>
