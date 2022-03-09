<?php

$pageTitle = "search | Legendary_lords_bonus";
session_start();

define('DB_HOST', "localhost");
define('DB_NAME', "root");
define('DB_PASSWORD', "root");
define('DB_DATABASE',"LegendaryLordsBonus");

$connect = new mysqli(DB_HOST, DB_NAME, DB_PASSWORD, DB_DATABASE);

$ll_selected = $_POST["legendary_lord_selection"];
$race_selected = $_POST["race"];

    if (isset($ll_selected) && $ll_selected != " -- select a legendary lord -- "){

        $req_bonuses="SELECT bonus1, bonus2, bonus3 from legendaryLords where legendary_lord = '$ll_selected'";
        $resultat_bonuses=$connect->query($req_bonuses);
        $connect->close();         
            while ($ll_bonus = mysqli_fetch_array($resultat_bonuses)){
               
                $bonus1=$ll_bonus[bonus1];
                $bonus2=$ll_bonus[bonus2];
                $bonus3=$ll_bonus[bonus3];
 
        }
       
    }else
        echo 'pas de legendary lord entré!!!!'."\n";

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./style/style-bonus_result.css">
            <title>Bonus Results</title>
        </head>
        <body>
            
        <a href="formulaire.php">Retour au formulaire</a>

        <h1>Legendary lord bonuses result</h1>
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Legendary Lord Name</th>
              <th scope="col">Bonus 1</th>
              <th scope="col">Bonus 2</th>
              <th scope="col">Bonus 3</th>
            </tr>
          </thead>
          <tbody>
            <tr id="col-1">
              <th scope="row">1</th>
              <?php 
                echo '<td>'.$ll_selected.'</td>';    
                echo '<td> '.$bonus1.' </td>';
                echo '<td> '.$bonus2.' </td>';
                echo '<td> '.$bonus3.' </td>';
              ?>
            </tr>
            <tr>
              <th scope="row">2</th>             
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        
        </body>
        </html>