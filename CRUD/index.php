<?php 
require_once 'routeur/Routeur.php';
require_once 'controller/Controller.php';

$routeur = new Routeur();

$routeur->register('/', function () {
    include 'view/accueil.php';
});
$routeur->register('/admin/addLivre', function () {
    include 'view/FormAjoutLivre.php';
});
$routeur->register('/admin/addRayon', function () {
    include 'view/FormAjoutCatégorie.php';
});

$routeur->register('/control', function () {
    switch ($_GET['action']){
        case 'ajoutLivre':
            $control1 = new Controller($_GET['action']);
            $control1->ControlInputAddLivre();
            header('Location: /admin/addLivre');
            break;
        case 'ajoutCat':
            $control1 = new Controller($_GET['action']);
            $control1->ControlInputAddCat();
            header('Location: /admin/addRayon');
            break;
    }
});
$routeur->register('/nouveaute', function () {
    include 'view/nouveaute.php';
});
$routeur->register('/connexion', function () {
    include 'view/connexion.php';
});
// TODO :
// -Rajout d'un système de session admin.
//  -modification de la base de données ?
//   -rajout d'une table admin ?
//   -rajout d'une colonne dans adhérents ?
//   -adhérent utilisera un mot de passe dans adhérent et admin utilisera une table dédié ?
//  -Rajout de if pour tester la session ?
// -sécuriser les formulaires
// -formulaire de modification des livres
// -gestion adhérent/exemplaires
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//






 
 
$routeur->resolve($_SERVER['REQUEST_URI']);

?>