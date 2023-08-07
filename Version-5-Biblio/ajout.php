<?php ob_start() ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Ajouter un livre</h1>

<form action="" class="container w-25 mt-5" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Titre :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <label for="nom" class="form-label">Catégories :</label>
    <select class="form-select form-select-md" aria-label=".form-select-sm example">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="mt-3">
        <input class="form-control form-control-md" type="file" name="fileImg">
    </div>



    <div class="container d-flex justify-content-end">
        <button class="btn couleur-bordure m-5" type="submit" style="background-color:#E8C5B4; color:#C46642;" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Ajout réaliser">Ajouter</button>
    </div>
</form>


<?php
$content = ob_get_clean();
require "template.php";
?>