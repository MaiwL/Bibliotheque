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
            break;
        case 'supprLivre':
            $control1 = new Controller($_GET['action']);
            $control1->ControlInputSuprrLivres();
            header('Location: /admin/suppr');
        case 'modifLivre':
            $control1 = new Controller($_GET['action']);
            

    }
});
$routeur->register('/nouveaute', function () {
    include 'view/nouveaute.php';
});
$routeur->register('/connexion', function () {
    include 'view/connexion.php';
});
$routeur->register('/admin/suppr', function () {
    include 'view/formSuppr.php';
});
$routeur->register('/admin/test', function () {
    include 'view/testadmin.php';
});
$routeur->register('/admin/modif', function () {
    include 'view/FormModifierLivre.php';
});
$routeur->register('/formtest', function () {
    include 'view/formtest.php';
});
$routeur->register('/output', function () {
    include 'view/outputtest.php';
});
$routeur->register('/errorform', function () {
    include 'view/erroreg.php';
    sleep(5);
    header('Location: /admin/addRayon');
});
$routeur->register('/horaire', function () {
    include 'view/horaire.php';
});
$routeur->register('/testAdmin', function () {
    include 'view/testadmin.php';
});
$routeur->register('/compte', function () {
    include 'view/compteClient.php';
});




// TODO :
// -Rajout d'un système de session admin.
//  -modification de la base de données ?
//   -rajout d'une table admin ?
//   -rajout d'une colonne dans adhérents ?
//   -adhérent utilisera un mot de passe dans adhérent et admin utilisera une table dédié ?
//  -Rajout de if pour tester la session ?
// -sécuriser les formulaires
// -formulaire de modification/suppression des livres
// -gestion adhérent/exemplaires
// -page coup de coeur(livres choisis par l'admin)
// -
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