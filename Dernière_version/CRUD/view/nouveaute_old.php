<?php ob_start() ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Nouveautés de la semaine</h1>

<div class="couleur-bordure container border-top border-2 mt-5"></div>


<div class="row container-fluid d-flex justify-content-center mt-5">

    <div class="" style="width: 18rem;">
     <img src="./Images/BW-LesChats.jpg" class="card-img-top" alt="...">
     <div class="card-body">
      <p class="card-text">Auteur : Bernard WERBER</p>
      <p class="card-text">Titre : Demain les chats</p>
      <p class="card-text">Catégorie : Poesie</p>
      
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/A-DemainUneOasis.jfif" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : AYERDHAL</p>
       <p class="card-text">Titre : Demain une oasis</p>
       <p class="card-text">Catégorie : Exploration</p>
       
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/AD-LaHordeDuContrevent.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Alain DAMASIO</p>
       <p class="card-text">Titre : La horde du contrevent</p>
       <p class="card-text">Catégorie : Fantastique</p>
       
     </div>
    </div>



<div class=" couleur-bordure container border-top border-2 mt-5 mb-5"></div>



    <div class="" style="width: 18rem;">
     <img src="./Images/MC-AutreMonde.jpeg" class="card-img-top" alt="...">
     <div class="card-body">
        <p class="card-text">Auteur : Maxime CHATTAM</p>
        <p class="card-text">Titre : Autre monde</p>
        <p class="card-text">Catégorie : Exploration</p>
        
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/MC-LesArcanesDuChaos.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Maxime CHATTAM</p>
       <p class="card-text">Titre : Les arcanes du chaos</p>
       <p class="card-text">Catégorie : Fantastique</p>
       
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/FT-LesManuscritInacheve.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Franck THILLIEZ</p>
       <p class="card-text">Titre : Le manuscrit inachevé</p>
       <p class="card-text">Catégorie : Fantastique</p>
       
     </div>
    </div>

</div>

<?php
$content =ob_get_clean();
require "template.php";
?>  