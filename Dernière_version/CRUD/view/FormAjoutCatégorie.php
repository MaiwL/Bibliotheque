<?php 
if(empty($_GET['action'])==false){
  if($_GET['action']=='erreur'){
    echo 'expréssion non conforme';
  }elseif($_GET['action']=='reussi'){
    echo 'catégorie ajouté ';
  }
}

?>

<form action="/control?action=ajoutCat" method="post" enctype="multipart/form-data">
  <label for="fname">Catégorie :</label><br>
  <input type="text" id="fname" name="NewRayon"><br>
  <button type="submit">Submit</button>
</form>