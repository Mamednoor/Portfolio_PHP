const handleFirstTab = (e) => {
  if (e.key === "Tab") {
    document.body.classList.add("user-is-tabbing");

    window.removeEventListener("keydown", handleFirstTab);
    window.addEventListener("mousedown", handleMouseDownOnce);
  }
};

const handleMouseDownOnce = () => {
  document.body.classList.remove("user-is-tabbing");

  window.removeEventListener("mousedown", handleMouseDownOnce);
  window.addEventListener("keydown", handleFirstTab);
};

window.addEventListener("keydown", handleFirstTab);

const backToTopButton = document.querySelector(".back-to-top");
let isBackToTopRendered = false;

let alterStyles = (isBackToTopRendered) => {
  backToTopButton.style.visibility = isBackToTopRendered ? "visible" : "hidden";
  backToTopButton.style.opacity = isBackToTopRendered ? 1 : 0;
  backToTopButton.style.transform = isBackToTopRendered
    ? "scale(1)"
    : "scale(0)";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > 700) {
    isBackToTopRendered = true;
    alterStyles(isBackToTopRendered);
  } else {
    isBackToTopRendered = false;
    alterStyles(isBackToTopRendered);
  }
});

document.getElementById("image").addEventListener("change", function(evt){
  var p=document.getElementById("preview"); /* Bloc d'affichage de la liste des fichiers */
  p.innerHTML=""; /* Effacer le contenu initial de #preview */
  for (var i=0; i<this.files.length; i++) {
    var f=this.files[i];
    var div=document.createElement("div");
    div.className="image";
    var span=document.createElement("span");
    span.innerHTML=f.name+" ("+getHumanSize(f.size)+")";
    var vignette=document.createElement("img");
    vignette.src = window.URL.createObjectURL(f); 
    /* Attacher les élements HTML au DOM */
    div.appendChild(vignette);
    div.appendChild(span);
    p.appendChild(div);
  }
  p.style.display="flex";  
  img.style="flex"
});
/* Retourne une taille de fichier en mode lisible par un humain */
function getHumanSize(s) {
  s=parseInt(s); /* Pour s'assurer que le paramètre d'entrée est entier */
  if (s<1024) {
    return s+" o";  
  } else if (s<1024*1024) {
    return (s/1024).toFixed(1)+" ko";  
  } else if (s<1024*1024*1024) {
    return (s/1024/1024).toFixed(1)+" Mo";  
  } else {
    return (s/1024/1024/1024).toFixed(1)+" Go";  
  }
}