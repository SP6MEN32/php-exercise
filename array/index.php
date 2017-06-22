<!-- exercice array exo 1 -->
<?php
$calendrier = array("janvier","fevrier","mars",
"avril","mai","juin","juillet","aout",
"septembre","octobre","novembre","decembre");

//   // exercice array exo 2
 echo '<pre>';
 echo $calendrier[2];
 echo'</pre>';

  //exercice array exo 3
 echo '<pre>';
 echo $calendrier[6];
 echo '</pre>';

  // exercice array exo 4
  // $new = array(7 => "août");
  // $array = array_replace_recursive($array,$new);
  $calendrier[7] = "août";
  // echo '<pre>';
  // print_r($array);
  // echo '</pre>';

//exercice array exo 5+7
$dep = array(
  62 => "pas de calais",
  59 => "Nord",
  51 => "marne"
);


//exercice array exo6
echo $dep[59].'<br />';

// exercice array exo 8
for ($numero = 0; $numero < 12; $numero++)
{
    echo $calendrier[$numero] . '<br />';
}

//exercice array exo 9
foreach($dep as $element)
{
    echo $element . '<br />';
}


//exercice array exo 10
foreach ($dep as $key => $value) {
  echo "le departement"." ".$value." "."a le numero"." ".$key ."<br />" ;
}






?>
