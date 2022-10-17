<?php

$int_color_1 = rand(1,3);
$int_color_2 = rand(1,3);

//var_dump($int_color_1); //display random
//var_dump($int_color_2);
 if ($int_color_1 == 1){
     $color_1 = "Yellow";
 }
 if ($int_color_1 == 2){
     $color_1 = "Red";
 }
 if ($int_color_1 == 3){
     $color_1 = "Blue";
 }
switch ($int_color_2){
    case 1:
        $color_2 = "Yellow";
        break;
    case 2:
        $color_2 = "Red";
        break;
    Case 3:
        $color_2 = "Blue";
        break;
    default:
        $color_2 = "Noir";
}

// var_dump($int_color_1);
// var_dump($color_1);
// var_dump($int_color_2);
// var_dump($color_2);

//=================== addition et multiplication //===================
$first = rand(1,9);
$second = rand(1,9);
$third = rand(1,9);

function addition ($x, $y){
    return $x + $y;
  }

  function multiplication ($n, $m){
       return $n * $m;
  }

  $res = addition($first, $second);
  $res_end = multiplication($res, $third);
  $result = multiplication(addition($first,$second), $third);
//  var_dump($first);
//  var_dump($second);
//  var_dump($res);
//  var_dump($result);

//===================== afficher chaque lettre du mot "rétroviseur" ===================//
echo "<br>"
$word = "rétroviseur";
$voyelle = "aeiouy";
function letter (){
    for ($i=0; isset($word[$i]); $i++){
        echo $word[$i];
}
}

for ($i=0; $i < strlen($word); $i++){
    echo $word[$i];
}
//==================== autre methode ===================//
//foreach (str_split($word as $key => $value))
//==================== écrire à l'envers ==================//
for ($i = strlen($word)-1; $i>=0; $i++) {
    echo $word;
}
//=================== sans les voyelles ==================//
for ($i=0; $i < strlen($word); $i++){
    for ($a=0; $a <strlen($voyelle); $a++){
        if ($word[$i] != $voyelle[$a]){
            echo $word[$i];
            echo "\n";
        }
    }
}
//==========================tableau keys = mois, value = day=======/
echo "<br>";
$annee = array("Janvier" =>31, "Février"=>29, "Mars"=>31,"Avril"=>30,"Mai"=>31,"Juin"=>30,"Juillet"=>31,"Aout"=>31,
    "Septembre"=>30,"Octobre"=>31,"Novembre"=>30,"Décembre"=>31);

foreach ($annee as $month => $day){
echo("au moins de" . $month . "qui a" . $day);

}
var_dump($annee);