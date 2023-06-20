<?php ob_start() ?>

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Espace administrateur</h1>
<p class="d-flex justify-content-center fs-5">Bienvenue 'nom de l'administrateur'</p>
<div class="container justify-content-center">
    <div class="container row" style="margin-top:100px;">
        <div class="col d-flex justify-content-center ">
            <a href="#"><img src="./Images/AjoutLivre.png" style="width:50px; height:50px;" alt=""></a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="#"><img src="./Images/SupprimerLivre.png" style="width:50px; height:50px;" alt=""></a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="#"><img src="./Images/ModifierLivre.png" style="width:50px; height:50px;" alt=""></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="row container">
        <img src="" alt="">
        <p>Titre : Jean | Auteur : Bernard Weber | Pages : 350 | Parution : 2010 </p>
    </div>
    <div class="container row">
    <div class="col d-flex justify-content-center ">
            <a href="#"><img src="./Images/AjoutLivre.png" style="width:30px; height:30px;" alt=""></a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="#"><img src="./Images/SupprimerLivre.png" style="width:30px; height:30px;" alt=""></a>
        </div>
        <div class="col d-flex justify-content-center">
            <a href="#"><img src="./Images/ModifierLivre.png" style="width:30px; height:30px;" alt=""></a>
        </div>
    </div>
</div>




<?php
$content = ob_get_clean();
require "template.php";
?>