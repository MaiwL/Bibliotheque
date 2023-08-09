<?php ob_start() ?>
<?php session_start() ?>
<link rel="stylesheet" href="style.css">
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Bienvenue "Nom de l'adhérent"</h1>
<div class="container couleur-bordure w-50 rounded border mt-5 position-relative">

  <div class="container col p-5 pb-0 d-flex justify-content-center">
    <img src="view/Images/livre.png" alt="" style="width:180px; height:180px;">
  </div>
    <div class="container col p-5 pb-0 d-flex justify-content-center mb-5">
      <a href="" class="ajuste" id="afficherCompte">Compte</a>
      <a href="" class="ajuste">Emprunts</a>
      <a href="" class="ajuste">Déconnexion</a>

      <div id="infosCompte" style="display: none;">
      <p>Nom : Jean</p>
      <p>Prénom : Yves</p>
      <p>Age : 25 ans</p>
      <p>Adresse : 85 Avenue de la papeterie 59485 CityBook</p>
      <p>Numéro de téléphone : 01 02 03 04 05</p>
      <p>E-mail : nozobobr@obr.fr</p>
</div>
    </div>
  
   
  


</div>


<?php
$content = ob_get_clean();
require "template.php";
?>