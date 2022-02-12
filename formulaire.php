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
    <link rel="stylesheet" href="./style/style-form.css">
    <title>Legendary lord selection</title>
</head>
<body>
    <div class="container">
        <a href="ll_creation.php">Add new legendary lords</a>
        <h1>Which bonus for which legendary lord in TOTAL WAR WARHAMMER II</h1>
            <div class="formulaire">             
                <form action="search.php" method="post">
                    <label for="legendary_lord">Choose a legendary lord or a race : </label>
                    <select onchange="selectRace();" name="race" id="race">
                    <option disabled selected value> -- choose a race -- </option>
                            <?php 
                            while ($race = mysqli_fetch_array($resultat_race)) {
                                echo '<option value="'.$race['race'].'">'.$race['race'].'</option>';
                            }
                            ?>
                            <script>
                                function selectRace(){
                                var race = document.getElementById("race").value;
                                document.getElementById("raceDisplay").innerHTML="You selected "+race; 
                                }
                            </script>
                            
                    </select>
                    <select class="form-control" id="form-control" name="legendary_lord_selection">
                            <option disabled selected value> -- select a legendary lord -- </option>
                            <?php
                            
                            /*if (isset($race_selected) && $race_selected != 'value'){
                                $connect = new mysqli("localhost", "root", "root", "LegendaryLordsBonus");
                                $req_race_ll = "SELECT legendary_lord from race inner join legendarylords on race.id = legendarylords.race_id where race = $race";
                                $resultat_race_ll= $connect->query($req_race_ll);
                                $connect->close();
                                    while ($race_ll = mysqli_fetch_array($resultat_race_ll)) {
                                        echo '<option value="'.$race_ll['legendary_lord'].'">'.$race_ll['legendary_lord'].'</option>';

                                        }
                                   }
                            else{*/
                                while ($ll = mysqli_fetch_array($resultat_ll)) {
                                    echo '<option value="'.$ll['legendary_lord'].'">'.$ll['legendary_lord'].'</option>';
                                }
                            
                            ?>
                    </select>
             
                    <input type="submit" value="valider">
                </form>
                <p id="raceDisplay"></p>
            </div>
               
    </div>
</body>
<?php
//host=localhost -uroot -proot
?>
</html>
