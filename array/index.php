<!-- exercice array exo 1 -->
<?php
$array = array("janvier","fevrier","mars",
"avril","mai","juin","juillet","aout",
"septembre","octobre","novembre","decembre");
  echo '<pre>';
    print_r ($array);
  echo '</pre>';

//   // exercice array exo 2
 echo '<pre>';
 echo $array[2];
 echo'</pre>';

  //exercice array exo 3
 echo '<pre>';
 echo $array[6];
 echo '</pre>';

  // exercice array exo 4
// $array[7] = "août";
//  echo $array;
  $new = array(7 => "août");
  $array = array_replace_recursive($array,$new);
  echo '<pre>';
  print_r($array);
  echo '</pre>';

//exercice array exo 5
$departement['dep59'] = "Nord et sa ville de Lille (62)";
$departement['dep62'] ="Pas de Calais et sa ville de Arras (62)" ;
echo $departement ['dep62'];
?>


 ?>
