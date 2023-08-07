<?php ob_start() ?>
<?php require_once '../model/EnsembleLivres.class.php' ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Espace administrateur</h1>
<p class="d-flex justify-content-center fs-5">Bienvenue</p>
<?php
EnsembleLivres::affichageLivre();
?> 

<?php
$content = ob_get_clean();
require "template.php";
?>