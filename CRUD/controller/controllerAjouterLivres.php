<?php require_once '../model/LivresManager.class.php' ?>

<?php 
//--------------------------------------------------------------------------------------------------------------------------------------------------
if (empty($_FILES['file'])==false AND empty($_POST['NomRayon'])==false AND empty($_POST['PrenomAuteur'])==false AND empty($_POST['NomAuteur'])==false) {
    echo "transfert réussi";
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $dotPosition = strrpos($name, '.');
    $stringAfterDot = substr($name, $dotPosition + 1);
    $randomNumber = rand(0, 5000000);
    $name = $randomNumber . '.' . $stringAfterDot;
    $imgpath = './Images/'.$name;
    move_uploaded_file($tmpName, '../view/Images/'.$name);
    $manager = new LivresManager($_POST['Titre'], $imgpath, $_POST['NomRayon'], $_POST['PrenomAuteur'], $_POST['NomAuteur']);
    $manager->AjouterLivres();
}else {
    echo "transfert non réussi";
}
// -teste si les données on bien été transmise dans leurs totalité
// -stockage des données de la variable temporaire $_FILES dans d'autres variables.
// -randomisation du nom de l'image transmise
// -création du chemin de fichier à transmettre dans la BDD
// -création d'un object de type LivresManager avec pour attribut les données transmises et le chemin de fichier modifié
// -ajout de l'objet dans la BDD grace à la méthode AjouterLivres
// TODO :
//-détection de charactère non conforme pour prévenir les injection de balise avec REGEX
//-changement de la randomisation du nom de l'image avec l'utilisation de timestamp--
//afin de générer un ID unique et ainsi prévenir le cas rarissime ou deux livres avec même titre auraient un nom d'image généré identique
//-tranformation du fichier en classe
?>