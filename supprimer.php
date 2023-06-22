<?php ob_start() ?>

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Suppresion d'un livre</h1>


<?php
$content = ob_get_clean();
require "template.php";
?>