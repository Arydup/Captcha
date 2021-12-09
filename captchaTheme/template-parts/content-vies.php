<!-- Galerie de photos -->
<article class="galerieArticle">
<div class="galeriePhoto">
    <img id="image1" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/50291306_10155703710312373_212636503610753024_n.jpg" onclick="laPhoto()" alt="">
    <img id="image2" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/70.jpg" onclick="laPhoto1()" alt="">
    <img id="image3" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/17097616_10211617169445589_5486389992862712301_o.jpg" onclick="laPhoto2()" alt="">
    <img id="image4" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/TimTalk2017__4__1.png" onclick="laPhoto3()" alt="">
    <img id="image5" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/74184713_10221276422688890_6112985295508996096_o.jpg" onclick="laPhoto4()" alt="">
    <img id="image6" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/48403665_10155658032242373_192888965538250752_o.jpg" onclick="laPhoto5()" alt="">
    <img id="image7" src="https://eddym11.sg-host.com/wp-content/uploads/2021/11/76686389_2771369179586284_9112608652811829248_n.jpg" onclick="laPhoto6()" alt="">
    <img id="image8" src="https://eddym11.sg-host.com/wp-content/uploads/2021/11/DSCN3514_1.png" onclick="laPhoto7()" alt="">
    <img id="image9" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/41893943_2199846520086685_1515502132634058752_o.jpg" onclick="laPhoto8()" alt="">
    <img id="image10" src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/48424727_10155658032642373_7408415923826065408_o-1024x771.jpg" onclick="laPhoto9()" alt="">
</div></article>


<script>
// Fonctions définies pour chaque photo: Si on clique sur l'une d'entre elles, elle s'affichera en plus grand
function laPhoto(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/50291306_10155703710312373_212636503610753024_n.jpg" onclick="laPhoto()" alt="">';
}
function laPhoto1(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/70.jpg" onclick="laPhoto1()" alt="">';
}function laPhoto2(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/17097616_10211617169445589_5486389992862712301_o.jpg" onclick="laPhoto2()" alt="">';
}function laPhoto3(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/TimTalk2017__4__1.png" onclick="laPhoto3()" alt="">';
}function laPhoto4(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/74184713_10221276422688890_6112985295508996096_o.jpg" onclick="laPhoto4()" alt="">';
}function laPhoto5(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/48403665_10155658032242373_192888965538250752_o.jpg" onclick="laPhoto5()" alt="">';
}function laPhoto6(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="https://eddym11.sg-host.com/wp-content/uploads/2021/11/76686389_2771369179586284_9112608652811829248_n.jpg" onclick="laPhoto6()" alt="">';
}function laPhoto7(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="https://eddym11.sg-host.com/wp-content/uploads/2021/11/DSCN3514_1.png" onclick="laPhoto7()" alt="">';
}function laPhoto8(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/41893943_2199846520086685_1515502132634058752_o.jpg" onclick="laPhoto8()" alt="">';
}function laPhoto9(){
    document.getElementById("imageClick").style.display = "inherit";

document.getElementById("imgAffiche").innerHTML = '<img  src="http://eddym11.sg-host.com/wp-content/uploads/2021/11/48424727_10155658032642373_7408415923826065408_o-1024x771.jpg" onclick="laPhoto9()" alt="">';
}
//On clique sur le fond pour ne plus afficher l'image
function leFond(){

    document.getElementById("imageClick").style.display = "none";

}
</script>