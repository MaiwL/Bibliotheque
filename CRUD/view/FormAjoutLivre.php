<?php ob_start() ?>
<?php require_once 'model/RayonsManager.class.php' ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Ajouter un livre</h1>

<form action="/control?action=ajoutLivre" class="container w-25 mt-5" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nom" class="form-label">Titre :</label>
        <input type="text" class="form-control" name="Titre" required>
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" name="NomAuteur" required>
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" name="PrenomAuteur" required>
    </div>
    <label for="nom" class="form-label">Catégories :</label>
    <select class="form-select form-select-md" aria-label=".form-select-sm example" name="NomRayon" required>
    <?php Rayons::affichageRayonsMenu(); ?>
    </select>
    <div class="mt-3">
        <label for="file">Fichier</label>
        <input class="form-control form-control-md" type="file" name="file" required>
    </div>



    <div class="container d-flex justify-content-end">
        <button class="btn couleur-bordure m-5" type="submit" style="background-color:#E8C5B4; color:#C46642;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ajout réaliser">Ajouter</button>
    </div>
</form>


<?php
$content = ob_get_clean();
require "template.php";
?>