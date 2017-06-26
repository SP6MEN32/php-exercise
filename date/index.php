<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>--exercice date exo 1--</h3>
    <?php
    echo '<time datetime="'.date('c').'">'.date('d / m / Y').'</time>';
    ?>
    <h3>--exercice date exo 2--</h3>
    <?php
    echo '<time datetime="'.date('c').'">'.date('d - m - Y').'</time>';
    ?>
    <h3>--exercice date exo 3--</h3>
    <?php
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    echo strftime('%A %d %B %Y');
    ?>
    <h3>--exercice date exo 4--</h3>
    <?php
    echo strtotime('tuesday 2 august 2016');
    ?>
    <h3>--exercice date exo 5--</h3>
    <?php

    $date1 = strtotime('16 may 2016');
    $date2 = strtotime('26 june 2017');

    $nbJoursTimestamp = $date2 - $date1;

    //  Pour convertir le timestamp (exprimé en secondes) en jours
    // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc
    $nbJours = $nbJoursTimestamp/86400;
    echo "Nombre de jours : ".$nbJours;
    ?>
  </body>
</html>
