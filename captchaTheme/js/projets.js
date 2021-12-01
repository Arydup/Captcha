( function() {
    //let modeSombreToggle = document.querySelector(".modeSombreToggle");

    /*if(document.body.classList.contains("darkmode--activated")){
        modeSombreActive.toggleAttribute("checked");
    };*/

    
    //modeSombreToggle.addEventListener('click', function(){ document.documentElement.style.setProperty('--transitionTemps', "left 0.25s");})
}() );

function validerCours(){
    let checkbox3D = document.getElementById("checkbox3D");
    let checkboxWeb = document.getElementById("checkboxWeb");
    let checkboxJeu = document.getElementById("checkboxJeu");
    let checkboxDesign = document.getElementById("checkboxDesign");
    let checkboxVideo = document.getElementById("checkboxVideo");
    let tousLesArticles = document.querySelectorAll("article");

    for (i = 0; i < tousLesArticles.length; i++) {
        tousLesArticles[i].style.display = 'none';
    }

    if (checkbox3D.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("3D")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxWeb.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Web")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxJeu.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Jeu")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxDesign.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
            if (tousLesArticles[i].classList.contains("Design")){
                tousLesArticles[i].style.display = 'block';
            }
        }
    }
    if (checkboxVideo.checked) {
        for (i = 0; i < tousLesArticles.length; i++) {
            //tous[i].style.display = 'none';
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