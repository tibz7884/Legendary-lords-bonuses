<a href="formulaire.php">Back to form</a>

<form action="ll_creation.php" method="get" name="new_lord" id="new_lord">
    <label for="new_lord" >Legendary lord : </label>
        <input onchange="newEntry()" required type="text" name="ll_name" id="ll_name">
    <label for="new_lord" >Race</label>
        <input required type="number" name="race_id" id="race_id">
    <label for="new_lord" >Bonus 1</label>
        <input required type="text" name="bonus1" id="bonus1">
    <label for="new_lord" >Bonus 2</label>
        <input required type="text"name="bonus2" id="bonus2">
    <label for="new_lord" >Bonus 3</label>
        <input required type="text" name="bonus3" id="bonus3">
    <input type="submit" value="valider">
</form>


<?php



$name_ll = $_GET['ll_name'];
$bonus1_ll = $_GET['bonus1'];
$bonus2_ll = $_GET['bonus2'];
$bonus3_ll = $_GET['bonus3'];
$race_ll = $_GET['race_id'];

if (isset($_GET) && $_GET != ""){

    $connect = new mysqli("localhost", "root", "root", "LegendaryLordsBonus");
    $req_inewlord = "INSERT into legendarylords (legendary_lord, bonus1, bonus2, bonus3, race_id) values ('$name_ll', '$bonus1_ll', '$bonus2_ll','$bonus3_ll','$race_ll')";
    $resultat_inewlord= $connect->query($req_inewlord);
        var_dump($resultat_inewlord);
        if ($resultat_inewlord===false){
            echo 'PAS CONNECTE';
            $connect->close();
        }
    $connect->close();
    
   

}
else{
    echo 'Il manque des informations';
}

//while ($race = mysqli_fetch_array($resultat_race)) {

   // echo '<option value="'.$race['race'].'">'.$race['race'].'</option>';

//Requete SQL pour enregistrer un legendary lord
//insert into legendarylords (legendary_lord, bonus1, bonus2, bonus3, race_id) values ('$name_ll', '$bonus1_ll', '$bonus2_ll','$bonus3_ll','$race_ll');

?>
