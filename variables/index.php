<?php
$Tableau = ["dauphin", 67, "choucroute", false];
echo $Tableau[2]. "<br>";

//Add Push
array_push($Tableau, "testPush");
echo $Tableau[4]. "<br>";

//Add Simple
$Tableau[] = "testSimple";
echo $Tableau[5]. "<br>";
var_dump($Tableau);
echo "Le Tableau est égal a ". count($Tableau);

//Supp Unset
unset($Tableau[4]);


//Supp Simple
//$Tableau[5] = "";


//Affichage
var_dump($Tableau);
echo "Le Tableau est égal a ". count($Tableau);
?>
