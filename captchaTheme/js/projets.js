let objets;
( function() {
    let boutonRetour = document.querySelectorAll('.boutonRetour');
    let boiteProjet = document.querySelectorAll(".boiteProjet");
    let tousLesArticles = document.querySelectorAll("article");
    let flechePrecedante = document.querySelectorAll(".flechePrecedante");
    let flecheSuivante = document.querySelectorAll(".flecheSuivante");
    /*
    var nodes = Array.prototype.slice.call(boiteProjet);*/
   /*
    objets = nodes.filter(function(node) {
        return node.style.display !== "none"
    })//.length*/
    //splice


    for (let i = 0; i < boutonRetour.length; i++) {
        boutonRetour[i].addEventListener("click", function() {
            for (let i = 0; i< boiteProjet.length; i++) {boiteProjet[i].style.transition = 'all 0.3s ease'}
            boiteProjet[i].style.opacity = 0;
            boiteProjet[i].style.zIndex = -10;
            //boiteProjet[i].style.transition = 'all 0.3s ease';
        });
    }
    for (let i = 0; i < tousLesArticles.length; i++) {
            tousLesArticles[i].addEventListener("click", function() {
            //boiteProjet[i].style.transition = 'all 0.3s ease';
            boiteProjet[i].style.opacity = 1;
            boiteProjet[i].style.zIndex = 10;
            
            //transition: all 0.3s;
        })  
    }

        
    for (let i = 0; i < boiteProjet.length; i++) {
            flechePrecedante[i].addEventListener("click", function() {
                for (let i = 0; i< boiteProjet.length; i++) {boiteProjet[i].style.transition = 'none'}
                //boiteProjet[i].style.transition = 'all 0s ease';
            boiteProjet[i-1].style.opacity = 1;
            boiteProjet[i-1].style.zIndex = 10;
            boiteProjet[i].style.opacity = 0;
            boiteProjet[i].style.zIndex = -10;
            

        });
        flecheSuivante[i].addEventListener("click", function() {
            //boiteProjet[i].style.transition = 'all 0s ease';
                for (let i = 0; i< boiteProjet.length; i++) {boiteProjet[i].style.transition = 'none'}
            boiteProjet[i+1].style.opacity = 1;
            boiteProjet[i+1].style.zIndex = 10;
            boiteProjet[i].style.opacity = 0;
            boiteProjet[i].style.zIndex = -10;
        }); 
    }
}() );

function validerCours(){
    let checkbox3D = document.getElementById("checkbox3D");
    let checkboxWeb = document.getElementById("checkboxWeb");
    let checkboxJeu = document.getElementById("checkboxJeu");
    let checkboxDesign = document.getElementById("checkboxDesign");
    let checkboxVideo = document.getElementById("checkboxVideo");
    let tousLesArticles = document.querySelectorAll("article");

    let boiteProjet = document.querySelectorAll(".boiteProjet");
    

    for (i = 0; i < tousLesArticles.length; i++) {
        tousLesArticles[i].style.display = 'none';
        boiteProjet[i].style.opacity = 0;
        boiteProjet[i].style.zIndex = -10;
        //boiteProjet[i].style.display = 'none';
    }

    if (checkbox3D.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("3D")){
                tousLesArticles[i].style.display = 'block';
                //boiteProjet[i].style.display = 'flex';
            }
            
        }
    }
    if (checkboxWeb.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Web")){
                tousLesArticles[i].style.display = 'block';
                //boiteProjet[i].style.display = 'flex';
            }
        }
    }
    if (checkboxJeu.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Jeu")){
                tousLesArticles[i].style.display = 'block';
                //boiteProjet[i].style.display = 'flex';
            }
        }
    }
    if (checkboxDesign.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Design")){
                tousLesArticles[i].style.display = 'block';
                //boiteProjet[i].style.display = 'flex';
            }
        }
    }
    if (checkboxVideo.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Video")){
                tousLesArticles[i].style.display = 'block';
                //boiteProjet[i].style.display = 'flex';
            }
        }
    }
    if(!checkbox3D.checked & !checkboxJeu.checked & !checkboxDesign.checked & !checkboxVideo.checked & !checkboxWeb.checked)
    {
        for (i = 0; i < tousLesArticles.length; i++) {
            tousLesArticles[i].style.display = 'block';
            //boiteProjet[i].style.display = 'flex';
        }  
    }
    /*
    for (let i = 0; i < boiteProjet.length; i++) {
        if(boiteProjet[i].style.display==='none'){
            /*Array.prototype.forEach.call( boiteProjet, function( node ) {
                boiteProjet[i].parentNode.removeChild(boiteProjet[i]);
            });*/
            //boiteProjet[i].remove(i);
            //boiteProjet[i].parentNode.removeChild(boiteProjet[i]);
         /*   
        }
    }*/
    
    
    /*
    Array.prototype.forEach.call( boiteProjet, function( node) {
        
        boiteProjet[i].parentNode.removeChild(i);
            
        if(boiteProjet[i].style.display!=='flex'){
            boiteProjet[i].parentNode.removeChild(i);
            console.log(boiteProjet);
        }
               
    });*/
    //boiteProjet = document.querySelectorAll(".boiteProjet").forEach(e => e.parentNode.removeChild(e));
    /*var nodes = Array.prototype.slice.call(boiteProjet);
    objets = nodes.filter(function(node) {
        return node.style.display !== "none"
    })//.length*/
    //console.log(objets);
    
}