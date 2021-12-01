( function() {
    
    //let modeSombreToggle = document.querySelector(".modeSombreToggle");

    /*if(document.body.classList.contains("darkmode--activated")){
        modeSombreActive.toggleAttribute("checked");
    };*/

    
    //modeSombreToggle.addEventListener('click', function(){ document.documentElement.style.setProperty('--transitionTemps', "left 0.25s");})
}() );

function valider3D(){
    let checkbox3D = document.getElementById("checkbox3D");
    let articles3D = document.getElementsByClassName("3D");
    if (checkbox3D.checked) {
        var i;
        for (i = 0; i < articles3D.length; i++) {
            articles3D[i].style.display = 'none';
        }
        //articles3D.style.display = "none";
    }
    else{
        articles3D.style.display = "block";
    }
}