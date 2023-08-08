<?php ob_start() ?>
<?php require_once '../CRUD/model/EnsembleLivres.class.php' ?>


<?php 
EnsembleLivres::affichageFormSuppr();
?>
<!-- <div class="container d-flex justify-content-end">
<input type="submit" name="formSubmit" value="Submit" />
    </div>
    
    </div>
</form>
<div class=" couleur-bordure container border-top border-2 mt-5"></div>
<form action="testadmin.php?action=suppr" method="post">
    <div class="row mt-5">
        <div class="form-check col-2 mt-3 d-flex justify-content-end">
            <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="a" name="form[]">
        </div>
        <div class="col-1 d-flex justify-content-center ms-4">
            <img src="../view/Images/test." style="width:80px; height:90px;" alt="">
        </div>
        <div class="col-5 mt-3">
            <p>Titre : La mariée portait des bottes jaunes | Auteur : Katherine Pancol | Pages : 752 | Parution : 12/04/2023</p>
        </div>

    </div> -->
        <div class="container d-flex justify-content-end">
            <input id="btnEnregistrer" type="submit" name="formSubmit" value="Enregistrer" />
    </div>
</form>

</div>

<?php
$content =ob_get_clean();
require "template.php";
?>  
