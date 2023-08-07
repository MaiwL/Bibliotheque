document.addEventListener("DOMContentLoaded", function() {
    var liens = document.getElementsByClassName("nav-item");
var bouton = document.getElementById("rechercher");

bouton.addEventListener("mouseover", function() {
  bouton.style.backgroundColor = "#E8C5B4";
  bouton.style.color = "#CF756C";
  bouton.style.borderColor = "#CF756C";
});

bouton.addEventListener("mouseout", function() {
  bouton.style.backgroundColor = "";
});

  
    for (var i = 0; i < liens.length; i++) {
      liens[i].addEventListener("mouseover", function() {
        this.style.fontSize = "larger"; // Augmenter la taille de police
      });
  
      liens[i].addEventListener("mouseout", function() {
        this.style.fontSize = "inherit"; // Rétablir la taille de police par défaut
      });
    }
  });