<?php require_once './BDDlink/connexion.class.php'; ?>

<?php

class EnsembleExemplaires extends Connexion{
    protected $idExemplaire;
    protected $idLivre;
    protected $Titre;
    protected $idAdherent;
    protected $NomAdherent;
    protected $PrenomAdherent;

    public function __construct($idExemplaire, $idLivre, $Titre, $idAdherent, $NomAdherent, $PrenomAdherent){
        $this->idExemplaire = $idExemplaire;
        $this->idLivre = $idLivre;
        $this->Titre = $Titre;
        $this->idAdherent = $idAdherent;
        $this->NomAdherent = $NomAdherent;
        $this->PrenomAdherent = $PrenomAdherent;
    }
    public function __tostring(){
        return "ID : $this->idExemplaire , Titre: $this->Titre , idLivre: $this->idLivre , idAdherent: $this->idAdherent , NomAdherent: $this->NomAdherent , PrenomAdherent: $this->PrenomAdherent";
    }
//getter & setter
    public function getIdExemplaire(){
        return $this->idExemplaire;
    }
    public function setIdExemplaire($idExemplaire){
        $this->idExemplaire = $idExemplaire;
    }
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
    public function getIdAdherent(){
        return $this->idAdherent;
    }
    public function setIdAdherent($idAdherent){
        $this->idAdherent = $idAdherent;
    }
    public function getNomAdherent(){
        return $this->NomAdherent;
    }
    public function setNomAdherent($NomAdherent){
        $this->NomAdherent = $NomAdherent;
    }
    public function getPrenomAdherent(){
        return $this->PrenomAdherent;
    }
    public function setPrenomAdherent($PrenomAdherent){
        $this->PrenomAdherent = $PrenomAdherent;
    }
    public static function ArrayToObjectNoeudExemplaires(){
    //-------------------------------------------------------------------------------------------------------------------
    $query = 
    "SELECT Exemplaires.idExemplaire, Livres.idLivre, Livres.Titre, Adherents.idAdherent, NomAdherent, PrenomAdherent FROM Exemplaires
    INNER JOIN Livres ON Exemplaires.idLivre = Livres.idLivre
    INNER JOIN Emprunter ON Emprunter.idExemplaire = Exemplaires.idExemplaire
    INNER JOIN Adherents ON Emprunter.idAdherent = Adherents.idAdherent;";
    $db = Connexion::connect();
    $stmt = $db->prepare($query);
    $stmt->execute();
    $Exemplaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $Exemplaires_array=[];
    foreach ($Exemplaires as $E){
    $tmp= new EnsembleExemplaires($E['idExemplaire'],$E['idLivre'],$E['Titre'],$E['idAdherent'],$E['NomAdherent'],$E['PrenomAdherent']);
    array_push($Exemplaires_array,$tmp);
    }
    return $Exemplaires_array;
    //récupération de tout les objet du 'noeud Exemplaires' dans un tableau à des fins d'affichage.(pas fini, non fonctionel)
}   
}