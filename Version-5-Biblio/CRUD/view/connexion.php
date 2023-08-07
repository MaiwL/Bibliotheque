<?php ob_start() ?> 
<?php session_start() ?>

<form class="container mt-5 perso" action="traitement.php" method="POST">
<div class="mb-3">
  <label for="nom" class="form-label">Nom :</label>
  <input type="text" class="form-control" placeholder="Nom"  name="name">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Age :</label>
  <input type="text" class="form-control"  placeholder="Votre age" name="age">
</div>
<input class="mt-4 btn btn-primary" type="submit" value="Envoyer">
</form>








<?php
$content =ob_get_clean();
require "template.php";
?>  