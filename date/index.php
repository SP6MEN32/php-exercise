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
  </body>
</html>
