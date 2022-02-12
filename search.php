<a href="formulaire.php">Retour au formulaire</a>
<?php

$pageTitle = "search | Legendary_lords_bonus";
session_start();

define('DB_HOST', "localhost");
define('DB_NAME', "root");
define('DB_PASSWORD', "root");
define('DB_DATABASE',"LegendaryLordsBonus");

$connect = new mysqli(DB_HOST, DB_NAME, DB_PASSWORD, DB_DATABASE);


//$req_race="SELECT race_ID FROM legendarylords INNER JOIN race on legendarylords.race_ID = race.id ";
//$resultat_race=$connect->query($req_race);
//$connect->close();

$ll_selected = $_POST["legendary_lord_selection"];
$race_selected = $_POST["race"];

//var_dump($ll_selected);
var_dump($race_selected);

    if (isset($ll_selected) && $ll_selected != " -- select a legendary lord -- "){

        echo 'Vous avec selectionné : '.$ll_selected."\n";

        $req_bonuses="SELECT bonus1, bonus2, bonus3 from legendaryLords where legendary_lord = '$ll_selected'";
        $resultat_bonuses=$connect->query($req_bonuses);
        $connect->close();         
            while ($ll_bonus = mysqli_fetch_array($resultat_bonuses)){
                //var_dump($ll_bonus);
                //echo 'Bonus 1 = '.$ll_bonus[bonus1].' '.'Bonus 2 = '.$ll_bonus[bonus2].' '.'Bonus 3 ='.$ll_bonus[bonus3] ;
        }
       
    }else
        echo 'pas de legendary lord entré!!!!'."\n";

