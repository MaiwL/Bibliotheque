<?php ob_start() ?>

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Espace administrateur</h1>
<p class="d-flex justify-content-center fs-5">Bienvenue 'nom de l'administrateur'</p>
<div class="container justify-content-center">
    <div class="container row" style="margin-top:100px;">
        <div class="col d-flex justify-content-center ms-4">
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

<div class=" couleur-bordure container border-top border-2 mt-5"></div>

<div class="row mt-5">
    <div class="col-1 d-flex justify-content-center ms-4">
        <img src="./Images/LaMarieePortaitDesBottesJaunes-KP.jpg" style="width:80px; height:90px;" alt="">
    </div>
    <div class="col-5 mt-3">
        <p>Titre : La mariée portait des bottes jaunes | Auteur : Katherine Pancol | Pages : 752 | Parution : 12/04/2023</p>
    </div>
    <div class="form-check col-2 mt-3 d-flex justify-content-end" >
        <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="" name="checkbox">
        <label class="form-check-label" for="checkboxModifier">Modifier</label>
    </div>
    <div class="form-check col-2 mt-3">
        <input class="form-check-input" type="checkbox" id="checkboxSupprimer" value="" name="checkbox">
        <label class="form-check-label" for="checkboxSupprimer">Supprimer</label>
    </div>
</div>

<div class="row mt-5">
    <div class="col-1 d-flex justify-content-center ms-4">
        <img src="./Images/Tsunami-MD.jpg" style="width:80px; height:90px;" alt="">
    </div>
    <div class="col-5 mt-3">
        <p>Titre : Tsunami | Auteur : Marc Dugain | Pages : 272 | Parution : 29/03/2023</p>
    </div>
    <div class="form-check col-2 mt-3 d-flex justify-content-end" >
        <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="" name="checkbox">
        <label class="form-check-label" for="checkboxModifier">Modifier</label>
    </div>
    <div class="form-check col-2 mt-3">
        <input class="form-check-input" type="checkbox" id="checkboxSupprimer" value="" name="checkbox">
        <label class="form-check-label" for="checkboxSupprimer">Supprimer</label>
    </div>
</div>

<div class="row mt-5">
    <div class="col-1 d-flex justify-content-center ms-4">
        <img src="./Images/LesFemmesDuBoutDuMonde-MDC.jpg" style="width:80px; height:90px;" alt="">
    </div>
    <div class="col-5 mt-3">
        <p>Titre : Les femmes du bout du monde | Auteur : Mélissa Da Costa | Pages : 384 | Parution : 01/03/2023</p>
    </div>
    <div class="form-check col-2 mt-3 d-flex justify-content-end" >
        <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="" name="checkbox">
        <label class="form-check-label" for="checkboxModifier">Modifier</label>
    </div>
    <div class="form-check col-2 mt-3">
        <input class="form-check-input" type="checkbox" id="checkboxSupprimer" value="" name="checkbox">
        <label class="form-check-label" for="checkboxSupprimer">Supprimer</label>
    </div>
</div>

<div class="row mt-5">
    <div class="col-1 d-flex justify-content-center ms-4">
        <img src="./Images/LaTraverseeDesTempsSoleilSombre-EES.jpg" style="width:80px; height:90px;" alt="">
    </div>
    <div class="col-5 mt-3">
        <p>Titre : La traversee des temps - Soleil sombre | Auteur : Eric Emmanuel | Pages : 576 | Parution : 02/11/2022</p>
    </div>
    <div class="form-check col-2 mt-3 d-flex justify-content-end" >
        <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="" name="checkbox">
        <label class="form-check-label" for="checkboxModifier">Modifier</label>
    </div>
    <div class="form-check col-2 mt-3">
        <input class="form-check-input" type="checkbox" id="checkboxSupprimer" value="" name="checkbox">
        <label class="form-check-label" for="checkboxSupprimer">Supprimer</label>
    </div>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>