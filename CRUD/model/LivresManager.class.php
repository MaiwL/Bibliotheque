<?php require_once 'BDDlink/connexion.class.php';  
class LivresManager extends Connexion{
    protected $Titre;
    protected $imgpath;
    protected $NomRayon;
    protected $PrenomAuteur;
    protected $NomAuteur;

    public function __construct($Titre, $imgpath, $NomRayon, $PrenomAuteur, $NomAuteur){
        $this->Titre = $Titre;
        $this->imgpath = $imgpath;
        $this->NomRayon = $NomRayon;
        $this->PrenomAuteur = $PrenomAuteur;
        $this->NomAuteur = $NomAuteur;
    }
    public function __tostring(){
        return "Titre: $this->Titre , imgpath: $this->imgpath , NomRayon: $this->NomRayon , PrenomAuteur: $this->PrenomAuteur , NomAuteur: $this->NomAuteur";
    }
    //getter & setter
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
    public function getNomRayon(){
        return $this->NomRayon;
    }
    public function setNomRayon($NomRayon){
        $this->NomRayon = $NomRayon;
    }
    public function getPrenomAuteur(){
        return $this->PrenomAuteur;
    }
    public function setPrenomAuteur($PrenomAuteur){
        $this->PrenomAuteur = $PrenomAuteur;
    }
    public function getNomAuteur(){
        return $this->NomAuteur;
    }
    public function setNomAuteur($NomAuteur){
        $this->NomAuteur = $NomAuteur;
    }

    public function AjouterLivres(){
        //------------------------------
        $db = Connexion::connect();
        //Connection à la base de données
        //------------------------------
        //------------------------------
        $condition1 = false;
        $condition2 = false;
        //Déclaration des condition suivante : -$condition 1 : Le Livre n'existe pas et est inséré -$condition 2 : L'Auteur n'existe pas et est inséré
        //------------------------------
        $query = "SELECT Titre, imgpath FROM Livres WHERE Titre = :Titre AND imgpath = :imgpath";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':Titre', $this->Titre);
        $stmt->bindParam(':imgpath', $this->imgpath);
        $stmt->execute();

        if($stmt->rowCount()==0){
        //Vérification de l'existence ou non du Livre
        //------------------------------
            $stmt->closeCursor();
            $condition1 = true;
            $query = "INSERT INTO Livres (Titre,idRayon,imgpath) VALUES (:Titre,(SELECT idRayon FROM Rayons WHERE NomRayon = :NomRayon),:imgpath)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':Titre', $this->Titre);
            $stmt->bindParam(':NomRayon', $this->NomRayon);
            $stmt->bindParam(':imgpath', $this->imgpath);
            $stmt->execute();
            $stmt->closeCursor();
        } 
        //Insertion du Livre
        //------------------------------
        $query = "SELECT NomAuteur, PrenomAuteur FROM Auteurs WHERE NomAuteur = :NomAuteur AND PrenomAuteur = :PrenomAuteur";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':NomAuteur', $this->NomAuteur);
        $stmt->bindParam(':PrenomAuteur', $this->PrenomAuteur);
        $stmt->execute();
        if($stmt->rowCount()==0){
        //Vérification de l'existence de l'auteur
        //------------------------------
        $condition2 = true;
        $query = "INSERT INTO Auteurs (NomAuteur, PrenomAuteur) VALUES (:NomAuteur,:PrenomAuteur)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':NomAuteur', $this->NomAuteur);
        $stmt->bindParam(':PrenomAuteur', $this->PrenomAuteur);
        $stmt->execute();
        $stmt->closeCursor();
        }
        //Insertion de l'auteur
        //------------------------------
        if(($condition1==true AND $condition2==true) OR ($condition1 == true AND $condition2 == false)){
            $query = "INSERT INTO correspond (idLivre, idAuteur) VALUES 
            (
            (SELECT idLivre FROM Livres where Titre = :Titre AND imgpath = :imgpath),
            (SELECT idAuteur FROM Auteurs where NomAuteur = :NomAuteur AND PrenomAuteur = :PrenomAuteur)
            )";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':Titre', $this->Titre);
            $stmt->bindParam(':imgpath', $this->imgpath);
            $stmt->bindParam(':NomAuteur', $this->NomAuteur);
            $stmt->bindParam(':PrenomAuteur', $this->PrenomAuteur);
            $stmt->execute();
        }
        //Insertion de la correspondance
        
        
}

}