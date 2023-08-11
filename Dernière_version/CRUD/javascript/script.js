document.addEventListener("DOMContentLoaded", function () {
  const liens = document.getElementsByClassName("upper");
  const bouton = document.getElementById("rechercher");
  const compte = document.getElementById("afficherCompte");
  const infosCompte = document.getElementById("infosCompte");
  const soulignerElements = document.getElementsByClassName("souligner");
  var vert = document.getElementsByClassName("green");

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

  // Fonction qui montre ce que le client à cliquer exemple : Compte, montre les informations du comptes concernant le client. - Page compteClient


  // Petit commentaire : Alors je t'explique exactement ce que je voulais faire xD 
  // Je voulais qu'une fois que le client click sur le bouton "compte" les informations s'affiche en dessous, seulement pour ne 
  // pas casser le code je ne sais pas réellement comment faire, je voulais créer une requête pour récupérer les informations et les afficher
  // mais directement dans le js, mauvaise idées je pense est-ce que je créer une page exprès pour la récupération et après j'appelle
  // ce fichier dans le js ? 






  for (var i = 0; i < soulignerElements.length; i++) {
    soulignerElements[i].addEventListener("mouseover", function () {
      soulignerElements.style.textDecoration = "underline";
    });

    soulignerElements[i].addEventListener("mouseout", function () {
      soulignerElements.style.textDecoration = "none";
    });
  }
  for (var i = 0; i < vert.length; i++) {
    vert[i].addEventListener("mouseover", function () {
      vert.style.background = "green";
      vert.style.color = "white";
      vert.style.borderColor = "white";
      vert.style.borderRadius = "2px";
    });
    vert[i].addEventListener("mouseout", function () {
      vert.style.background = "";
      vert.style.color = "";
      vert.style.borderColor = "";
      vert.style.borderRadius = "";
    });
  }
});
