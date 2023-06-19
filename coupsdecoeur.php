<?php ob_start() ?>
<!-- Titre -->
<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 90px; color: #CF756C; font-family: 'Playfair Display', serif;">Coups de  cœur !</h1>
<!-- Livre coup de coeur -->
<div class="row row-cols-1 row-cols-md-3 g-3 m-5 d-flex justify-content-center">
  <div class="col">
    <div class="card h-100 couleur-bordure">
      <img src="./Images/LesSalaudsGentilsHommes-SL.jpg" class="card-img-top p-2" alt="Horloges">
      <div class="card-body">
        <p>Titre : Les Salauds gentils hommes - Les mensonges de Locke Lamora</p>
        <p>Auteur : Scott LYNCH</p>
        <p>Résumé : « Sidérant de virtuosité : un chef-d'oeuvre. » Le Monde« Ce roman m'a captivé. Locke Lamora est un bandit plein de charme et la cité de Camorr un décor fascinant qui rivalise avec Lankhmar et Ambre. » George R. R. Martin, auteur du Trône de ferOn l'appelle la Ronce de Camorr. Un bretteur invincible, un maître voleur. La moitié de la ville le prend pour le héros des miséreux. L'autre moitié pense qu'il n'est qu'un mythe. Les deux moitiés n'ont pas tort. En effet, sachant à peine manier l'épée, Locke Lamora est, à son grand...</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 couleur-bordure">
      <img src="./Images/WitchAndGod-LS.jpg" class="card-img-top p-2" alt="...">
      <div class="card-body">
        <p>Titre : Witch and God</p>
        <p>Auteur : Liv STONE</p>
        <P>Résumé : Ella est une jeune sorcière sans dons, enjouée et pétillante, vivant tranquillement dans le monde des humains, où elle suit des cours à l’Université de Springfall. Cette année encore, elle va assister aux côtés de ses deux puissantes sœurs à la fête de la communauté des sorcières. Mais cette édition est particulière  : les sorcières et les dieux ont décidé de faire cesser le conflit qui perdure entre eux depuis des décennies. Pour sceller cette paix, ils organisent un mariage entre un représentant de chaque communauté....</P>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 couleur-bordure">
      <img src="./Images/LasDeCoeur-MM.jpg" class="card-img-top p-2" alt="...">
      <div class="card-body">
        <p>Titre : L'as de coeur</p>
        <p>Auteur : Morgane MONCOMBLE</p>
        <P>Résumé : Le best-seller de Morgane MoncombleS'il y a bien une chose que Rose et Levi ont en commun, autre qu'un passé sombre, c'est le poker. Elle est née avec un don ; il a passé sa vie à dépouiller les casinos du monde entier pour un jour devenir le meilleur. Arrivé à son apogée, un seul obstacle se dresse devant lui : Tito Ferragni, sa némésis de toujours. Si son honneur lui a jusqu'ici évité de révéler au public les nombreuses tricheries de Tito, Levi refuse de se laisser faire plus longtemps. Cette année, un seul homme...</P>
      </div>
    </div>
  </div>
  
</div>


<?php
$content = ob_get_clean();
require "template.php";
?>