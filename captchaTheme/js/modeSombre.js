( function() {
    let modeSombreActive = document.querySelector(".modeSombre-checkbox");
    let modeSombreToggle = document.querySelector(".modeSombreToggle");
    let logo = document.querySelector(".custom-logo");
    let logoAccueil = document.querySelector(".logoAccueil");

    if(document.body.classList.contains("darkmode--activated")){
        modeSombreActive.toggleAttribute("checked");
    }
    
    modeSombreToggle.addEventListener('click', function(){ document.documentElement.style.setProperty('--transitionTemps', "left 0.25s");})
}() );