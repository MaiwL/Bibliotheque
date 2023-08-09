<?php ob_start() ?>
<!--Accueil Partie Image et bienvenue  -->
<div class="position-relative pb-5">
    <img src="view/Images/Bibliotheque-header.jpg" class="w-100 h-75 img-fluid" alt="">
     <h1 class="display-1 position-absolute top-50 start-50 translate-middle" style= "color : #E8C5B4; font-family: 'Playfair Display', serif;">Bienvenue</h1>
</div>

<div class=" couleur-bordure container border-top border-2 mt-5"></div>
<!-- Partie présentation -->
<p class="container p-5">La bibliothèque de Dunkerque vous ouvre ses portes. Ouvertes il y a quelques mois, vous y trouveraient bon nombre d'ouvrages, vous pourriez lire vos livres sur place ou bien les emprunter pour les lires dans votre endroit préféré !</p>

<div class=" couleur-bordure container border-top border-2 mt-5"></div>
<!-- Partie nouveautés, coups de coeur, horaires et information -->
<div class="container">
    <div class="row justify-content-center gap-5 mt-5">
      <div class=" px-0 mb-5" style="width: 18rem;">
        <img src="view/Images/Lire.jpg" class="card-img-top rounded-0" alt="Robot">
        <div class="card-body">
          <p class="card-text">Venez découvrir les nouveautés de la semaine...</p>
          <a href="/nouveaute" class="btn surli" style=" color:#E8C5B4;">Nouveautés</a>
        </div>
      </div>
      <div class=" px-0 mb-5" style="width: 18rem;">
        <img src="view/Images/Enfants.jpg" class="card-img-top rounded-0" alt="PC">
        <div class="card-body">
          <p class="card-text">Venez découvrir nos différents coups de coeur !</p>
          <a href="#" class="btn surli" style=" color:#E8C5B4;">Coups de coeur</a>
        </div>
      </div>
      <div class=" px-0 mb-5" style="width: 18rem;">
        <img src="view/Images/Livres.jpg" class="card-img-top rounded-0" style="height:193px;" alt="Page de code">
        <div class="card-body">
          <p class="card-text">Pour plus d'informations veuillez cliquer en dessous !</p>
          <a href="#" class="btn surli" style="color:#E8C5B4;">Horaires et informations</a>
        </div>
      </div>
    </div>
    <ul>
      <li>
        <a href="/admin/addLivre">ajouter livre</a>
      </li>
      <li>
        <a href="/admin/addRayon">ajouter rayon</a>
      </li>
      <li>
        <a href="/admin/suppr">supprimer livre</a>
      </li>
    </ul>
</div>


<?php
$content =ob_get_clean();
require "template.php";
?>  
