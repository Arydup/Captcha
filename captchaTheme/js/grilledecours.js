
	let btn_cours = document.querySelectorAll(".session_cours a");
    let tous_les_cours = document.querySelectorAll(".cours");
    console.log(tous_les_cours.length);
    console.log(btn_cours.length);
    for(let btn of btn_cours){
        btn.addEventListener("mousedown",function(){
         // console.log(btn.className);
          affiche_cours(btn.className);
        })
    }
function affiche_cours(typecours){
        console.log(typecours);
      //for(let cours of tous_les_cours){
     for (let k =0 ; k<tous_les_cours.length ; k++)
     {
        console.log(k)
        if (typecours != 'tous')
        {
            tous_les_cours[k].classList.remove("affiche-cours");
            //console.log(typecours)
            console.log(tous_les_cours[k].classList)
            if(tous_les_cours[k].classList.contains(typecours)){
            tous_les_cours[k].classList.add("affiche-cours");
            } 
        }
        else{
            tous_les_cours[k].classList.add("affiche-cours"); 
        }
    }
}

