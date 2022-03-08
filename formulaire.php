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
    <script src="./function.js"></script>
    <script src="./race_ll.json"></script>
    <title>Legendary lord selection</title>
</head>
<body>
    <a href="ll_creation.php">Add new legendary lords</a>
        <div class="container">
            <img src="./images/logo_warhammer_III.jpeg" alt="">
       
            <h1>Which bonus for which legendary lord in TOTAL WAR WARHAMMER</h1>
                <div class="formulaire">             
                    <form action="search.php" method="post">
                        <div id="label_option_race">
                            <label for="legendary_lord">Choose a race : </label>
                            <select onchange="displayLegendaryLord('./race_ll.json')" name="race" id="race">
                                <option disabled selected value> -- choose a race -- </option>
                                    <?php 
                                    while ($race = mysqli_fetch_array($resultat_race)) {
                                        echo '<option value="'.$race['race'].'">'.$race['race'].'</option>';
                                    }
                                    ?>                                       
                        </div>
                            </select>
                        <div id="label_option_ll">
                            <label for="legendary_lord">Choose a legendary lord : </label>
                                <select class="legendary_lord" id="legendary_lord" name="legendary_lord_selection">
                                    <option disabled selected value> -- select a legendary lord -- </option>
                                        <script> 
                                            jsonFetch('./race_ll.json');
                                        </script>
                                </select>
                        </div>
                        <div id="button_container">
                            <input type="submit" value="confirm" id="button">
                        </div>
                        
                    </form>
                <p id="raceDisplay"></p>
            </div>
               
        </div>
</body>
<?php
//host=localhost -uroot -proot
?>
</html>
