<?php ob_start() ?>
<!-- Titre -->
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Horaires et informations</h1>
<!-- Partie horaire -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-5 d-flex justify-content-center">
  <div class="col">
    <div class="card h-100">
      <img src="./Images/Horaires.jpg" class="card-img-top" alt="Horloges">
      <div class="card-body">
        <h5 class="card-title">Horaires</h5>

        <ul>
          <li>Lundi : 8h - 18h</li>
          <li>Mardi : 8h - 18h</li>
          <li>Mercredi : 8h - 18h</li>
          <li>Jeudi : 8h - 18h</li>
          <li>Vendredi : 8h - 18h</li>
          <li>Samedi : 10h - 17h</li>
          <li>Dimanche : Fermé</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Partie infos -->
  <div class="col">
    <div class="card h-100">
      <img src="./Images/Infos.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Informations</h5>
        <p class="card-text">La bibliothèque BooksDK est un joyau culturel niché au cœur de Dunkerque. Avec ses étagères qui s'étendent à perte de vue, son atmosphère chaleureuse, cette bibliothèque est un véritable refuge pour les amoureux des livres et les chercheurs de connaissances. La bibliothèque BooksDk abrite une vaste collection de livres de tous les genres et de toutes les époques. Outre le prêt de livres, la bibliothèque BooksDk met à votre disposition des espaces de lectures ainsi que des salles de lectures ou de réunion. Pour disposer d'une salle privée veuillez nous envoyez un mail 1 semaine avant la date concerné.</p>
      </div>
    </div>
  </div>
</div>
<!-- Partie map -->
<div class="container d-flex justify-content-center mb-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.6483340935874!2d2.333118427413237!3d51.0246321470125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc8b0c7b4d838b%3A0x9d5ff0855d797dd2!2s39%20Bd%20de%20l&#39;Aurore%2C%2059430%20Dunkerque!5e0!3m2!1sfr!2sfr!4v1686905439450!5m2!1sfr!2sfr" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Partie contact formulaire -->
<form action="" method="POST"></form>
<div class="container mb-5" style="width: 500px;">
  <div class="input-group mb-3">
    <div class="form-check me-2">
      <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
      <label class="form-check-label" for="flexRadioDefault1">
        Homme
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault">
      <label class="form-check-label" for="flexRadioDefault2">
        Femme
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Votre message : </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="div d-flex justify-content-end">
    <input type="submit" value="Envoyer" class="green" >
  </div>
</div>
</form>

<script src="../javascript/script.js"></script>
<?php
$content = ob_get_clean();
require "template.php";
?>