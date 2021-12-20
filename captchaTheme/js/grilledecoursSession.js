let btn_session = document.querySelectorAll(".session a");
    console.log("nbre="+btn_session.length);
    console.log(btn_cours.length);

    for(let btn of btn_session){
        btn.addEventListener("mousedown",function(){
         // console.log(btn.className);
          affiche_cours_session(btn.id);
        })
    
    }
    function affiche_cours_session(session){
        console.log("session="+session);
      //for(let cours of tous_les_cours){
     let choix_session=session.slice(-1)
     console.log("choix_session="+choix_session)    
     for (let k =0 ; k<tous_les_cours.length ; k++)
     {
        tous_les_cours[k].classList.remove("affiche-cours");
         let no_session= tous_les_cours[k].querySelector("span").innerHTML.substring(4,5)
         console.log("no_session="+no_session)
         console.log(k)
        if (choix_session==no_session || choix_session==0) 
        {
            tous_les_cours[k].classList.add("affiche-cours");
            } 
            /*
            tous_les_cours[k].classList.remove("affiche-type-cours");
            //console.log(typecours)
            console.log(tous_les_cours[k].classList)
            if(tous_les_cours[k].classList.contains(session)){
            tous_les_cours[k].classList.add("affiche-type-cours");
            } */
    }
}
