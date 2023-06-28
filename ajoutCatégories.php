<?php ob_start() ?>

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Ajout d'une catégories</h1>

<form action="" method="POST">
    <div class="pt-2 mt-5 mb-3 container w-25">
        <input type="text" class="form-control" name="name" placeholder="Nom de la catégorie">
    </div>
    <div class="container d-flex justify-content-end">
        <button class="btn couleur-bordure m-5" type="submit" style="background-color:#E8C5B4; color:#C46642;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ajout réaliser">Ajouter</button>
    </div>
</form>

<?php
$content = ob_get_clean();
require "template.php";
?>