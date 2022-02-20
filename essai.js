//Function to display the selection of the race in real time


function selectRace(){
    var race = document.getElementById("race").value;
    document.getElementById("raceDisplay").innerHTML="You selected "+race; 
    }

     /* var request = new XMLHttpRequest();
    request.open("GET", "race_ll.json", false);
    request.send(null)
    var my_JSON_object = JSON.parse(request.responseText);
    alert (my_JSON_object.result); */

/* function race_ll(PATH){
    const jsonFile = JSON.parse(PATH);
    alert("soucis");
    console.log(jsonFile);
} */

