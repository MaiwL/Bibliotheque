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
      <input type="email" name="Mail" placeholder=" E-mail ">

    </div>
    <div class="container col p-5 pb-0 d-flex justify-content-center">
      <input type="email" name="Mail" placeholder=" Vérification e-mail ">

    </div>
    <div class="container col p-5 d-flex justify-content-center">
      <input type="password" name="MDP" placeholder="Mot de passe">
    </div>
    <div class="container d-flex justify-content-center">
      <input type="submit" value="S'inscrire" class=" mb-5" name="btn">
    </div>
    <!-- Vérification : regardez si la variable existe avec isset -->
    <?php
    if (isset($_POST['btn'], $_POST['Mail'], $_POST['MDP'])) {
      // Vérification du format de l'email
      if (filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)) {
        echo "Parfait\n";
      } else {
        echo "Invalide\n";
      }
      // Définition d'une expression régulière
      // /?=.*? Vérification de l'expression régulière
      $pattern = "/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}/";
      if (preg_match($pattern, $_POST['MDP'])) {
        echo "Parfait";
      } else {
        echo "\nInvalide";
      }
    }

  ?>
<?php
$content = ob_get_clean();
require "template.php";
?>