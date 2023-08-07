<?php ob_start() ?>
<?php require_once 'model/RayonsManager.class.php' ?>
<?php require_once 'model/EnsembleLivres.class.php' ?>
<?php EnsembleLivres::affichageFormModif($_GET['imgpath'])?>
<?php
$content = ob_get_clean();
require "template.php";
?>