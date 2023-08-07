<?php
require_once 'BDDlink/connexion.class.php';
class EnsembleLivres extends Connexion {
    protected  $idLivre;
    protected  $Titre;
    protected  $imgpath;
    protected  $idRayon;
    protected  $NomRayon;
    protected  $idAuteur;
    protected  $NomAuteur;
    protected  $PrenomAuteur;
    

    public function __construct($idLivre, $Titre, $imgpath, $idRayon, $NomRayon, $idAuteur, $NomAuteur, $PrenomAuteur) {
        $this->idLivre = $idLivre;
        $this->Titre = $Titre;
        $this->imgpath = $imgpath;
        $this->idRayon = $idRayon;
        $this->NomRayon = $NomRayon;
        $this->idAuteur = $idAuteur;
        $this->NomAuteur = $NomAuteur;
        $this->PrenomAuteur = $PrenomAuteur;
    }
    public function __tostring() {
        return "ID : $this->idLivre , Titre: $this->Titre , imgpath: $this->imgpath , idRayon: $this->idRayon ,
        NomRayon: $this->NomRayon , idAuteur: $this->idAuteur , NomAuteur: $this->NomAuteur , PrenomAuteur: $this->PrenomAuteur";
    }
    //getter & setter
    public function getIdLivre(){
        return $this->idLivre;
    }
    public function setIdLivre($idLivre){
        $this->idLivre = $idLivre;
    }
    public function getTitre(){
        return $this->Titre;
    }
    public function setTitre($Titre){
        $this->Titre = $Titre;
    }
    public function getImgpath(){
        return $this->imgpath;
    }
    public function setImgpath($imgpath){
        $this->imgpath = $imgpath;
    }
    public function getIdRayon(){
        return $this->idRayon;
    }
    public function setIdRayon($idRayon){
        $this->idRayon = $idRayon;
    }
    public function getNomRayon(){
        return $this->NomRayon;
    }
    public function setNomRayon($NomRayon){
        $this->NomRayon = $NomRayon;
    }
    public function getIdAuteur(){
        return $this->idAuteur;
    }
    public function setIdAuteur($idAuteur){
        $this->idAuteur = $idAuteur;
    }
    public function getNomAuteur(){
        return $this->NomAuteur;
    }
    public function setNomAuteur($NomAuteur){
        $this->NomAuteur = $NomAuteur;
    }
    public function getPrenomAuteur(){
        return $this->PrenomAuteur;
    }
    public function setPrenomAuteur($PrenomAuteur){
        $this->PrenomAuteur = $PrenomAuteur;
    }

    public static function ArrayToObjectEnsembleLivres(){
        //--------------------------------------------------------------------------------------------------------------------------------------
        $query = 
        "SELECT Livres.idLivre, Titre, imgpath, Livres.idRayon, NomRayon, Auteurs.idAuteur , NomAuteur, PrenomAuteur 
        FROM Livres
        INNER JOIN correspond ON correspond.idLivre = Livres.idLivre 
        INNER JOIN Auteurs ON correspond.idAuteur = Auteurs.idAuteur
        INNER JOIN Rayons ON Livres.idRayon = Rayons.idRayon";
        $db = Connexion::connect();
        $stmt = $db->prepare($query);
        $stmt->execute();
        $Livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $Livres_array=[];
        foreach ($Livres as $L){
        $tmp= new EnsembleLivres($L['idLivre'],$L['Titre'],$L['imgpath'],$L['idRayon'],$L['NomRayon'],$L['idAuteur'],$L['NomAuteur'],$L['PrenomAuteur']);
        array_push($Livres_array,$tmp);
        }
        return $Livres_array;
        //Récupération de tout les objet en rapport avec le 'noeud' Livres à des fins d'affichage.
    }
    public static function ArrayToObjectEnsembleLivresByImg($arg){
        //--------------------------------------------------------------------------------------------------------------------------------------
        $query = "SELECT Livres.idLivre, Titre, imgpath, Livres.idRayon, NomRayon, Auteurs.idAuteur , NomAuteur, PrenomAuteur 
        FROM Livres
        INNER JOIN correspond ON correspond.idLivre = Livres.idLivre 
        INNER JOIN Auteurs ON correspond.idAuteur = Auteurs.idAuteur
        INNER JOIN Rayons ON Livres.idRayon = Rayons.idRayon
        WHERE imgpath = :imgpath";
        $db = Connexion::connect();
        $stmt = $db->prepare($query);
        $stmt->bindParam(':imgpath', $arg);
        $stmt->execute();
        $Livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $Livres_array=[];
        foreach ($Livres as $L){
        $tmp= new EnsembleLivres($L['idLivre'],$L['Titre'],$L['imgpath'],$L['idRayon'],$L['NomRayon'],$L['idAuteur'],$L['NomAuteur'],$L['PrenomAuteur']);
        array_push($Livres_array,$tmp);
        }
        return $Livres_array;
        //Récupération de tout les objet en rapport avec le 'noeud' Livres à des fins d'affichage.
    }

    public static function affichageNouveautée(){
        //--------------------------------------------------------------------------------------------------------------
        $Livres = self::ArrayToObjectEnsembleLivres();
        while(count($Livres)>=6){
            array_shift($Livres);
        }
        $i=-1;
    foreach($Livres as $L){
        if ($i==-1){
            echo '<div class="couleur-bordure container border-top border-2 mt-5"></div>
            <div class="row container-fluid d-flex justify-content-center mt-5">';
            $i=0;
        }
    echo '<div class="" style="width: 18rem;">';
    echo '<img src="';
    echo $L->getImgpath();
    echo '"class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<p class="card-text">Auteur : ';
    echo $L->getNomAuteur();
    echo ' ';
    echo $L->getPrenomAuteur();
    echo '</p>';
    echo '<p class="card-text">Titre : ';
    echo $L->getTitre();
    echo '</p>';
    echo '<p class="card-text">Catégorie : ';
    echo $L->getNomRayon();
    echo '</p>';
    echo '</div>';
    echo '</div>';
    $i++;
    if ($i==3){
        echo '</div>';
        $i=-1;
    }
    }
    //Récupération de tout les objet instancié avec la static ArrayToObjectEnsembleLivres() puis création d'un format d'affichage pour la page nouveauté en ne gardant que les 5 dernier objet du tableau .
    }
    public static function affichageFormSuppr(){
        $Livres = self::ArrayToObjectEnsembleLivres();


    foreach($Livres as $L){
    echo '<div class=" couleur-bordure container border-top border-2 mt-5"></div>
    <form action="/control?action=supprLivre" method="post">
    <div class="row mt-5">
        <div class="form-check col-2 mt-3 d-flex justify-content-end">
            <input class="form-check-input me-2" type="checkbox" id="checkboxModifier" value="';
            echo $L->getImgpath();
            echo '" name="suppr[]">
        </div>
        <div class="col-1 d-flex justify-content-center ms-4">
            <img src="../';
            echo $L->getImgpath();
            echo '" style="width:80px; height:90px;" alt="">
        </div>
        <div class="col-5 mt-3">
            <p>Titre : ';
            echo $L->getTitre();
            echo ' | Auteur : ';
            echo $L->getNomAuteur();
            echo ' ';
            echo $L->getPrenomAuteur();
            echo '<a href="test?imgpath='.$L->getImgpath().'"> | modifier</a>';
            echo '</p>
        </div>


        

    </div>
        ';
}
    }
    public static function affichageFormModif($arg){
        $Livres = self::ArrayToObjectEnsembleLivresByImg($arg);
        foreach($Livres as $L){
        

    }
    }
}
?>