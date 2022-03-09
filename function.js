
//Function test, bring data from the race selection and write it
function selectRace(){
    var race = document.getElementById("race").value;
    console.log(race);
    document.getElementById("raceDisplay").innerHTML="You selected "+race; 
    };

//Function which get data from JSON file and dispay the result in an option menu in function of the race
function displayLegendaryLord(jsonFile){
    
    var race = document.getElementById("race").value;
    fetch(jsonFile)
    .then(results => results.json())
    .then((data) => {
        console.log(race)
        var ll_Selection = document.getElementById("legendary_lord");
        for (var i = 0; i<data.length+1; i++){ 
        ll_Selection.remove('option'); 
        }
        for (var i = 0; i<data.length; i++){ 
            var opt = document.createElement('option');   
            if (data[i].race === race){                   
                opt.value= data[i].legendary_lord;
                opt.text = data[i].legendary_lord;    
                ll_Selection.appendChild(opt);             
            }
        }   
    }); 
    }
    
//Function which get data from JSON file and dispay all legendary lords
function jsonFetch (jsonFile){

    fetch(jsonFile)
    .then(results => results.json())
    .then((dataMain) => {
        var ll_Selection = document.getElementById("legendary_lord");           
        for (var i = 0; i<dataMain.length; i++){ 
            var opt = document.createElement('option');     
            opt.value= dataMain[i].legendary_lord;
            opt.text = dataMain[i].legendary_lord;    
            ll_Selection.appendChild(opt);
        }
    });
}

   


