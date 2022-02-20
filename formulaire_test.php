<?php
 $connect = new mysqli("localhost", "root", "root", "LegendaryLordsBonus");
 $req_race = "SELECT race FROM race";
 $req_ll = "SELECT legendary_lord FROM legendarylords";
 $resultat_ll= $connect->query($req_ll);
 $resultat_race= $connect->query($req_race);
 $connect->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./essai.js"></script>
    <script src="./race_ll.json"></script>
    <title>Legendary lord selection</title>
</head>
<body>
    <?php
//Bring the request legendary lords with their own race for make the select option dynamic
        $connect = new mysqli("localhost", "root", "root", "LegendaryLordsBonus");
        $req_race_ll = "SELECT legendary_lord, race from race inner join legendarylords on race.id = legendarylords.race_id";
        $resultat_race_ll= $connect->query($req_race_ll);
        $connect->close();
            while ($race_ll = mysqli_fetch_array($resultat_race_ll)) {
                $llLord_Race[] = $race_ll;
            }
    ?>
    <div class="container">
        <h1>Which bonus for which legendary lord in TOTAL WAR WARHAMMER II</h1>
            <div class="formulaire">
                
                <form action="formulaire_test.php" method="post">
                    <label for="legendary_lord">Choose a legendary lord or a race : </label>
                    <select onchange="selectRace();" name="race" id="race">
                    <option disabled selected value> -- choose a race -- </option>
                    <?php 
                        while ($race = mysqli_fetch_array($resultat_race)) {
                            echo '<option value="'.$race['race'].'">'.$race['race'].'</option>';
                        }
                    ?>          
                    </select>
                    <select class="form-control" id="form-control" name="legendary_lord_selection">
                            <option disabled selected value> -- select a legendary lord -- </option>
                            <?php
                      
                                //Display all legendary lords
                                while ($ll = mysqli_fetch_array($resultat_ll)) {
                                    echo '<option value="'.$ll['legendary_lord'].'">'.$ll['legendary_lord'].'</option>';
                                }
                               
                            ?>                                                  
                    </select>
             
                    <input type="submit" value="valider">
                </form>
                <p id="raceDisplay"></p>
                <p id="dbDisplay"></p>
                <script>
                    
                    const jsonFile = JSON.stringify("./race_ll.json");
                    const jsonDisplay = document.querySelector("#dbDisplay")
                    jsonDisplay.innerHTML=jsonFile
                </script>
                <p> <?php //var_dump($llLord_Race); ?> </p> 
            </div>
               
    </div>
</body>
<?php
//host=localhost -uroot -proot
?>
</html>