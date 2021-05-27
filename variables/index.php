<?php
$Tableau = ["dauphin", 67, "choucroute", false];
echo $Tableau[2]. "<br>";

//Add Push
array_push($Tableau, "testPush");
echo $Tableau[4]. "<br>";

//Add Simple
$Tableau[] = "testSimple";
echo $Tableau[5]. "<br>";

//Affichage
var_dump($Tableau);
?>
