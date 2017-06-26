<?php
setcookie('login', $_POST['login']);
setcookie('mdp', $_POST['mdp']);

session_start();
?>


<!-- exercice globalVariable exo 1 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>globalVariable</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="bod">
    <h3>--exercice globalVariable exo 1--</h3>
    <h3>ceci est votre userAgent</h3>
    <?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n",'</br>';?>
    <h3>ceci est votre adresse ip</h3>
    <?php echo $_SERVER["REMOTE_ADDR"],'</br>';?>
    <h3>ceci est votre server</h3>
    <?php echo gethostname();'</br>';?>
  </body>
</html>


<!-- exercice globalVariable exo 2 -->
<?php

  $_SESSION['nom'] = 'Argemi(SP6MEN)';
  $_SESSION['prenom'] = 'Florian';
  $_SESSION['age'] = 32;
  echo '<h3>--exercice globalVariable exo 2--</h3>
  <li><a href="user.php">valider</a></li>
  <li>
  <h3>exercice globalVariable exo 3</h3>
  </li>';

// exercice globalVariable exo 3

  echo '<form action="index.php" method="POST">
          <label for="login">login</label>
          <input id="login" name="login" type="text">
            <label for="mdp">mot de passe</label>
            <input id="mdp" name="mdp" type="text">

                <button type="submit">valider</button>
        </form>';
        $_COOKIE['login'] = $_POST['login'];
        $_COOKIE['mdp'] = $_POST['mdp'];

        echo '<h1>' . $_COOKIE['mdp'] . '</h1>';
     echo '<h1>' . $_COOKIE['login'] . '</h1>';


?>
