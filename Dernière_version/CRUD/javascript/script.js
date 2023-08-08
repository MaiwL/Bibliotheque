document.addEventListener("DOMContentLoaded", function () {
  var liens = document.getElementsByClassName("upper");
  var bouton = document.getElementById("rechercher");
  var btnEnregistrer = document.getElementById("btnEnregistrer");
  var btn = document.getElementById("green");

  // Fonction pour augmenter la taille de la police quand on passe dessus - Template
  for (var i = 0; i < liens.length; i++) {
    liens[i].addEventListener("mouseover", function () {
      this.style.fontSize = "larger"; // Augmenter la taille de police
    });

    liens[i].addEventListener("mouseout", function () {
      this.style.fontSize = "inherit"; // Rétablir la taille de police par défaut
    });
  }

  // Fonction pour un changement de couleur quand on passe dessus - Template
  bouton.addEventListener("mouseover", function () {
    bouton.style.backgroundColor = "#CF756C";
    bouton.style.color = "#E8C5B4";
    bouton.style.borderColor = "#CF756C";
  });

  bouton.addEventListener("mouseout", function () {
    bouton.style.backgroundColor = "#E8C5B4";
    bouton.style.color = "#CF756C";
    bouton.style.borderColor = "#CF756C";
  });

  // Fonction pour un changement de couleur quand on passe dessus - Page de suppression

  btnEnregistrer.addEventListener("mouseover" ,function () {
    btnEnregistrer.style.backgroundColor = "green";
  })
  btnEnregistrer.addEventListener("mouseout", function () {
    btnEnregistrer.style.backgroundColor = "";
  })

  btn.addEventListener("mouseover" ,function () {
    btn.style.backgroundColor = "green";
  })
  btn.addEventListener("mouseout", function () {
    btn.style.backgroundColor = "";
  })


  
});