<?php ob_start() ?>
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Inscription</h1>

<form action="" method="POST">
    <div class="container col p-5 pb-0 d-flex justify-content-center">
      <input type="text" name="Mail" placeholder=" Nom ">

    </div>
    <div class="container col p-5 pb-0 d-flex justify-content-center">
      <input type="text" name="Mail" placeholder=" Prénom ">

    </div>
    <div class="container col p-5 pb-0 d-flex justify-content-center">
      <input type="email" name="EMail" placeholder=" E-mail ">

    </div>
    <div class="container col p-5 pb-0 d-flex justify-content-center">
      <input type="email" name="Mail" placeholder=" Vérification e-mail ">

    </div>
    <div class="container col p-5 d-flex justify-content-center">
      <input type="password" name="MDP1" placeholder=" Mot de passe">
    </div>
    <div class="container col pb-5  d-flex justify-content-center">
      <input type="password" name="MDP" placeholder=" Mot de passe identique">
    </div>
    <div class="container d-flex justify-content-center">
      <input type="submit" value="S'inscrire" class=" mb-5" name="btn">
    </div>
    <!-- Vérification : regardez si la variable existe avec isset -->
    <?php
    if (isset($_POST['btn'], $_POST['EMail'], $_POST['MDP'])) {
      // Vérification du format de l'email
      if (filter_var($_POST['EMail'], FILTER_VALIDATE_EMAIL)) {
        echo "E-mail valide\n";
      } else {
        echo "E-mail invalide\n";
      }
      if ($_POST['EMail']== $_POST['Mail']){
        echo "E-mail vérifié\n";
      } else {
        echo "E-mail non vérifié\n";
      }
      // Définition d'une expression régulière
      // /?=.*? Vérification de l'expression régulière
      $pattern = "/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}/";
      if (preg_match($pattern, $_POST['MDP1'])) {
        echo "Mot de passe valide\n";
      } else {
        echo "\nMot de passe invalide\n";
      }
      if($_POST['MDP1']==$_POST['MDP']){
        echo "Vérification mot de passe valide\n";
      } else {
        echo "Vérification mot de passe invalide\n";
      }
    }

  ?>
<?php
$content = ob_get_clean();
require "template.php";
?>