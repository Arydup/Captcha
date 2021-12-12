

const boutonFerme = document.querySelectorAll('.bouton-fermeture');
const InfoEnseignants = document.querySelectorAll(".InfoEnseignants");
const  Boutenseignants = document.querySelectorAll(".enseignants");
const carteInfo = document.querySelectorAll(".carteInfo");
  console.log('MIAOU');
console.log(carteInfo);
for (let i = 0; i < boutonFerme.length; i++) {
boutonFerme[i].addEventListener("click", function() {
  InfoEnseignants[i].style.opacity = 0;
  InfoEnseignants[i].style.zIndex = -1;
  console.log('MIAOU');
  });
}
for (let i = 0; i < Boutenseignants.length; i++) {
    console.log('MIAOU');
    Boutenseignants[i].addEventListener("click", function() {
          for (const InfoEnseignants of carteInfo) {
            InfoEnseignants.style.opacity = 0;
            InfoEnseignants.style.zIndex = -1;

          }
          InfoEnseignants[i].style.opacity = 1;
          InfoEnseignants[i].style.zIndex = 1001;

    })  
}

