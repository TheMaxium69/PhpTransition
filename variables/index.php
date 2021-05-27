<?php

//Déclaration
$Tableau = ["dauphin", 67, "choucroute", false];
echo $Tableau[2]. "<br>";

//Add Push
array_push($Tableau, "testPush");
echo $Tableau[4]. "<br>";

//Add Simple
$Tableau[] = "testSimple";
echo $Tableau[5]. "<br>";
var_dump($Tableau);

//Supp Unset
unset($Tableau[4]);

//Affichage
var_dump($Tableau);

//Taille
echo "(Count) Le Tableau est égal a ". count($Tableau) ."<br>";

echo "(Sizeof) Le Tableau est égal a ". sizeof($Tableau);


echo "<hr>";
//Seconde Méthode Pour Contruire Un Tableau

//Name
$Name = array(
    "prenom" => "luc",
    "nom" => "dupont",
    "age" => 23,
    "lunette" => true
);
$Name2 = array(
    "prenom" => "jean",
    "nom" => "blabla",
    "age" => 20,
    "lunette" => false
);
//Tablea de tout le monde
echo "Tableau de Tout les gens";
$AllName = array(
    $Name,
    $Name2
);
var_dump($AllName);

echo "<hr>";
//foreach
echo "<u>Tableau avec le foreach <br></u><br>";
echo "
<table>
    <thead>
        <tr>
            <th><u>prenom</u></th>
            <th><u>name</u></th>
            <th><u>age</u></th>
            <th><u>porte lunette</u></th>
        </tr>
    </thead>
    <tbody>
        ";
function cardTableau ($arg = '')
{
    $maCardFun = '<th>'. $arg .'</th>';
    echo $maCardFun;
}

function typeBoolean ($arg = '')
{
    $type = gettype($arg);
    if($type == "boolean") {
        if ($arg == 1) {
            echo cardTableau("oui");
        } else if ($arg == 0) {
            echo cardTableau("non");
        }
    }else{
        echo cardTableau($arg);
    }
}

echo "<tr>";
foreach($Name as $value) {
    typeBoolean($value);
}
echo "</tr>"."<tr>";
foreach($Name2 as $value) {
    typeBoolean($value);
}
echo "</tr>";


echo "
    </tbody>

</table>";
echo "<hr>";
echo "<u>Tableau fait main <br></u><br>";
?>
<table>
    <thead>
        <tr>
            <th><u>prenom</u></th>
            <th><u>name</u></th>
            <th><u>age</u></th>
            <th><u>porte lunette</u></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?php echo $Name["prenom"]?></th>
            <th><?php echo $Name["nom"]?></th>
            <th><?php echo $Name["age"]?></th>
            <th><?php if($Name["lunette"]){
                    echo "oui";
                }else{
                    echo "non";
                }
                ?></th>
        </tr>
        <tr>
            <th><?php echo $Name2["prenom"]?></th>
            <th><?php echo $Name2["nom"]?></th>
            <th><?php echo $Name2["age"]?></th>
            <th><?php if($Name2["lunette"]){
                    echo "oui";
                }else{
                    echo "non";
                }
                ?></th>
        </tr>
    </tbody>

</table>