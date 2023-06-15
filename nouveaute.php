<?php ob_start() ?> 

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Nouveautés de la semaine</h1>

<div class=" couleur-bordure container border-top border-2 mt-5"></div>


<div class="row container-fluid d-flex justify-content-center mt-5">

    <div class="" style="width: 18rem;">
     <img src="./Images/BW-LesChats.jpg" class="card-img-top" alt="...">
     <div class="card-body">
      <p class="card-text">Auteur : Bernard WERBER</p>
      <p class="card-text">Titre : Demain les chats</p>
      <p class="card-text">À Montmartre, deux chats extraordinaires, Bastet et Pythagore, se rencontrent, se comprennent et s'aiment, tandis que le monde des humains se complique. Bastet cherche à contrer la violence des hommes avec la spiritualité féline, mais Pythagore pense que les chats doivent se préparer à succéder à la civilisation humaine.</p>
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/A-DemainUneOasis.jfif" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : AYERDHAL</p>
       <p class="card-text">Titre : Demain une oasis</p>
       <p class="card-text">Un médecin technocrate de Genève voit sa vie basculer lorsqu'il est kidnappé, se réveillant dans un désert africain pour prendre la responsabilité médicale d'un village, aux côtés d'un vieillard gravement malade.</p>
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/AD-LaHordeDuContrevent.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Alain DAMASIO</p>
       <p class="card-text">Titre : La horde du contrevent</p>
       <p class="card-text">Dans une quête épique, vingt-trois membres d'un groupe d'élite, surnommé la Horde, traversent un monde sauvage pour trouver l'origine du vent, mêlant aventure, poésie et exploration du sens profond de la vie.</p>
     </div>
    </div>

</div>

<div class=" couleur-bordure container border-top border-2 mt-5 mb-5"></div>

<div class="row container-fluid d-flex justify-content-center mb-5">

    <div class="" style="width: 18rem;">
     <img src="./Images/MC-AutreMonde.jpeg" class="card-img-top" alt="...">
     <div class="card-body">
        <p class="card-text">Auteur : Maxime CHATTAM</p>
        <p class="card-text">Titre : Autre monde</p>
        <p class="card-text">Dans un monde sauvage où la nature domine et les enfants se regroupent pour survivre, trois adolescents affrontent une reine dangereuse dans une quête épique à travers un univers mystérieux rempli de créatures fantastiques.</p>
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/MC-LesArcanesDuChaos.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Maxime CHATTAM</p>
       <p class="card-text">Titre : Les arcanes du chaos</p>
       <p class="card-text">Une célibataire parisienne est plongée dans une lutte ancestrale et pourchassée par des tueurs lorsqu'elle découvre des secrets dangereux, allant des codes secrets aux sectes millénaires, remettant en question l'histoire telle que nous la connaissons.</p>
     </div>
    </div>
    <div class="" style="width: 18rem;">
     <img src="./Images/FT-LesManuscritInacheve.jpg" class="card-img-top" alt="...">
     <div class="card-body">
       <p class="card-text">Auteur : Franck THILLIEZ</p>
       <p class="card-text">Titre : Le manuscrit inachevé</p>
       <p class="card-text">Un thriller captivant de Franck Thilliez où une enquête sans corps et une défunte sans visage mènent à une histoire sans fin, plongeant les protagonistes dans une quête troublante de vérité et d'identité.</p>
     </div>
    </div>

</div>

<?php
$content =ob_get_clean();
require "template.php";
?>  