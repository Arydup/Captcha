let objets;
( function() {
    let boutonRetour = document.querySelectorAll('.boutonRetour');
    let boiteProjet = document.querySelectorAll(".boiteProjet");
    let tousLesArticles = document.querySelectorAll("article");
    let flechePrecedante = document.querySelectorAll(".flechePrecedante");
    let flecheSuivante = document.querySelectorAll(".flecheSuivante");


    for (let i = 0; i < boutonRetour.length; i++) {
        boutonRetour[i].addEventListener("click", function() {
            for (let i = 0; i< boiteProjet.length; i++) {boiteProjet[i].style.transition = 'all 0.3s ease'}
            boiteProjet[i].style.opacity = 0;
            boiteProjet[i].style.zIndex = -10;
        });
    }
    for (let i = 0; i < tousLesArticles.length; i++) {
        if(i == 0){
            flechePrecedante[i].style.color = "grey";
            flechePrecedante[i].style.opacity = "0.3";
            flechePrecedante[i].style.cursor = "default";
        }
        if(i == tousLesArticles.length-1){
            flecheSuivante[i].style.color = "grey";
            flecheSuivante[i].style.opacity = "0.3";
            flecheSuivante[i].style.cursor = "default";
        }
        tousLesArticles[i].addEventListener("click", function() {
        boiteProjet[i].style.opacity = 1;
        boiteProjet[i].style.zIndex = 10;
        })  
    }

        
    for (let i = 0; i < boiteProjet.length; i++) {

            flechePrecedante[i].addEventListener("click", function() {
                for (let i = 0; i< boiteProjet.length; i++) {boiteProjet[i].style.transition = 'none'}
                
            boiteProjet[i-1].style.opacity = 1;
            boiteProjet[i-1].style.zIndex = 10;
            boiteProjet[i].style.opacity = 0;
            boiteProjet[i].style.zIndex = -10;
        });

        flecheSuivante[i].addEventListener("click", function() {
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
    }

    if (checkbox3D.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            if (tousLesArticles[i].classList.contains("3D")){
                tousLesArticles[i].style.display = 'block';
            }
            
        }
    }
    if (checkboxWeb.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            if (tousLesArticles[i].classList.contains("Web")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxJeu.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            if (tousLesArticles[i].classList.contains("Jeu")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxDesign.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            if (tousLesArticles[i].classList.contains("Design")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxVideo.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            if (tousLesArticles[i].classList.contains("Video")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if(!checkbox3D.checked & !checkboxJeu.checked & !checkboxDesign.checked & !checkboxVideo.checked & !checkboxWeb.checked)
    {
        for (i = 0; i < tousLesArticles.length; i++) {
            tousLesArticles[i].style.display = 'block';
        }  
    }
}
