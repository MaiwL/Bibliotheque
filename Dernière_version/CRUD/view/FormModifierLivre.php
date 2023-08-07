<?php ob_start() ?>
<?php require_once 'model/RayonsManager.class.php' ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Modifier un livre</h1>
<div class="row container mb-5">
    <div class="container bg-black mt-5" style="width:300px; height:400px;">
        <img src="#" alt="Image du livre à modifier">
    </div>
    <form action="/control?action=modifLivre" class="container w-25 mt-5" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">Titre :</label>
            <input type="text" class="form-control" name="Titre" placeholder="Titre du livre" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" name="NomAuteur" placeholder="Nom de l'auteur" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" name="PrenomAuteur" placeholder="Prénom de l'auteur" required>
        </div>
        <!-- Pour la catégorie il faut trouver un moyen de "précocher" la catégorie du livre -->
        <label for="nom" class="form-label">Catégories :</label>
        <select class="form-select form-select-md" aria-label=".form-select-sm example" name="NomRayon" required>
            <?php Rayons::affichageRayonsMenu(); ?>
        </select>
        <div class="mt-3">
            <label for="file">Fichier</label>
            <input class="form-control form-control-md" type="file" name="file" required>
        </div>



        <div class="container d-flex justify-content-end">
            <button class="btn couleur-bordure m-5" type="submit" style="background-color:#E8C5B4; color:#C46642;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ajout réaliser">Modifier</button>
        </div>
    </form>
</div>
<!-- Mettre un post pour récupérer l'image du livre  -->

<?php
$content = ob_get_clean();
require "template.php";
?>