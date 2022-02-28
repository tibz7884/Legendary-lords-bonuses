//Function to display the selection of the race in real time


function selectRace(){
    var race = document.getElementById("race").value;
    console.log(race);
    document.getElementById("raceDisplay").innerHTML="You selected "+race; 
    };

//Function which get data from JSON file and dispay the result in an option menu
function displayLegendaryLord(){
    var race = document.getElementById("race").value;
    fetch('./race_ll.json')
    .then(results => results.json())
    .then((data) => {
        console.log(race)
        line = "";
        var ll_Selection = document.getElementById("form-control")
        for (var i = 0; i<data.length; i++){  
            if (data[i].race == race){
                var opt = document.createElement('option');
                opt.value=i;
                opt.text = data[i].legendary_lord;
                ll_Selection.appendChild(opt);
                
            }
        }
        //document.querySelector("#dbDisplay").innerHTML=data[19];
    }); 
    }

   


