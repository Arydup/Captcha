//------------------------------------Btnsession-------------------
let btn_session = document.querySelectorAll("session")
let tous_les_cours_sessions = document.querySelectorAll(".session_cours a");
let tous_les_cours = document.querySelectorAll(".cours");
console.log(btn_session.length);
console.log(tous_les_cours.length);
console.log(btn_cours.length);

for(let btn of btn_session){
    btn.addEventListener("mousedown",function(){
     // console.log(btn.className);
      affiche_cours_session(btn.className);
    })
    }

function affiche_cours_session(typecourssessions){
    console.log(typecourssessions);
    for (let k =0 ; k<tous_les_cours_sessions.length ; k++)
    {
        if (typecourssessions != 'tous')
        {
            tous_les_cours_session[k].classList.remove("affiche-types-cours");
            //console.log(typecours)
            console.log(tous_les_cours[k].classList)
            if(tous_les_cours_sessions[k].classList.contains(typecourssessions)){
            tous_les_cours_sessions[k].classList.add("affiche-types-cours");
            } 
        }


    }
}