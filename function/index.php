<!-- exercice function exo 1 -->
<!-- <?php
function floflo(){
  echo true;
}
// rapel la function
floflo();
 ?> -->
<!-- exercice function exo 2 -->
<!-- <?php
function flo($a){
  echo $a;
}
flo(5);
 ?> -->
 <!-- exercice function exo 3 -->
 <!-- <?php
function foo($a,$b,$c){
  echo ($a. $b. $c);
}
foo(f, l, o);
  ?> -->
<!-- exercice function exo 4 -->
<!-- <?php
function number($a, $b){
  if ($a > $b) {
  echo "le premier nombre est plus grand";
  }
  elseif ($a < $b){
    echo "le premier nombre est plus petit";
  }
  else{
    echo "les deux nombre sont identiques";
  }
}
number(3, 2);
?> -->

<!-- exercice function exo 5 -->

<!-- <?php
function caract($a, $b){
  echo "$a" . "$b";
}
caract("je suis SP6MEN32 et je suis du departement du", 32);
 ?> -->
<!-- exercice function exo 6 -->
<!-- <?php
function presentme($a, $b, $c){
  echo "bonjour"." "."$a"." "."$b"." ".",tu as"." "."$c"." "."ans.";
}
presentme("Argemi", "Florian", 32);
 ?> -->
<!-- exercice function exo 7 -->
<?php
function genre($a, $b){
  if ($a === "homme" && $b >= 18){
    echo "Vous etes un homme et vous etes majeur";
  }
  elseif ($a === "homme" && $b <18) {
    echo "Vous etes un homme et vous ete mineur";
  }
  elseif ($a === "femme" && $b >= 18){
    echo "Vous etes une femme et vous etes majeur";
  }
  else{
    echo "Vous etes une femme et vous etes mineur";
  }
}
genre("homme", 32);
 ?>
