<?php require_once 'model/EnsembleLivres.class.php'; ?>

    <?php ob_start() ?>
    <h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Nouveautés de la semaine</h1>
    <?php 
    EnsembleLivres::affichageNouveautée();
    ?>
    <?php
$content =ob_get_clean(); 
require "template.php";
?>

