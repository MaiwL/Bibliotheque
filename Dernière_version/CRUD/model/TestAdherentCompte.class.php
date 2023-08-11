<?php require_once 'model/BDDlink/connexion.class.php'?>

<?php
class Rayons extends Connexion {
    protected $NomAdherent;
    protected $PrenomAdherent;
    protected $AgeAdherent;
    protected $NumeroAdresseAdherent;
    protected $RueAdresseAdherent;
    protected $CodeAdresseAdherent;
    protected $VilleAdresseAdherent;
    protected $TelephoneAdherent;
    protected $EmailAdherent;

    public function __construct($NomAdherent, $PrenomAdherent, $AgeAdherent, $NumeroAdresseAdherent, $RueAdresseAdherent, $CodeAdresseAdherent, $VilleAdresseAdherent, $TelephoneAdherent, $EmailAdherent){
        
        $this->NomAdherent = $NomAdherent;
        $this->PrenomAdherent = $PrenomAdherent;
        $this->AgeAdherent = $AgeAdherent;
        $this->NumeroAdresseAdherent = $NumeroAdresseAdherent;
        $this->RueAdresseAdherent = $RueAdresseAdherent;
        $this->CodeAdresseAdherent = $CodeAdresseAdherent;
        $this->VilleAdresseAdherent = $VilleAdresseAdherent;
        $this->TelephoneAdherent = $TelephoneAdherent;
        $this->EmailAdherent = $EmailAdherent;
    }
    public function __tostring(){
        return "NomRayon: $this->NomRayon";
    }
    //getter & setter
    
    
    public function getNomAdherent(){
        return $this->NomAdherent;
    }
    public function getPrenomAdherent(){
        return $this->PrenomAdherent;
    }
    public function getAgeAdherent(){
        return $this->AgeAdherent;
    }
    public function getNumeroAdresseAdherent(){
        return $this->NumeroAdresseAdherent;
    }
    public function getRueAdresseAdherent(){
        return $this->RueAdresseAdherent;
    }
    public function getCodeAdresseAdherent(){
        return $this->CodeAdresseAdherent;
    }
    public function getVilleAdresseAdherent(){
        return $this->VilleAdresseAdherent;
    }
    public function getTelephoneAdherent(){
        return $this->TelephoneAdherent;
    }
    public function getEmailAdherent(){
        return $this->EmailAdherent;
    }

    public function setNomRayon($NomAdherent){
        $this->NomAdherent = $NomAdherent;
    }
    public function setPrenomAdherent($PrenomAdherent){
        $this->PrenomAdherent = $PrenomAdherent;
    }
    public function setAgeAdherent($AgeAdherent){
        $this->AgeAdherent = $AgeAdherent;
    }
    public function setNumeroAdresseAdherent($NumeroAdresseAdherent){
        $this->NumeroAdresseAdherent;
    }
    public function setRueAdresseAdherent($RueAdresseAdherent){
        $this->RueAdresseAdherent;
    }
    public function setCodeAdresseAdherent($CodeAdresseAdherent){
        $this->CodeAdresseAdherent;
    }
    public function setVilleAdresseAdherent($VilleAdresseAdherent){
        $this->VilleAdresseAdherent;
    }
    public function setTelephoneAdherent($TelephoneAdherent){
        $this->TelephoneAdherent;
    }
    public function setEmailAdherent($EmailAdherent){
        $this->EmailAdherent;
    }

    // public static function ObjToArrayRayon(){
    //     //-------------------------------------------
    //     $query = "SELECT * FROM Rayons";
    //     $db = Connexion::connect();
    //     $stmt = $db->prepare($query);
    //     $stmt->execute();
    //     $Rayons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     $Rayons_array=[];
    //     foreach ($Rayons as $L){
    //     $tmp= new Rayons($L['NomRayon']);
    //     array_push($Rayons_array,$tmp);
    //     }
    //     return $Rayons_array;
    //     //Récupération de toute les lignes de la table 'Rayons' à des fins d'affichage.
    // }
    
    // public static function affichageRayonsMenu(){
    //     //-------------------------------------------
    //     $Rayons = Rayons::ObjToArrayRayon();
    //     foreach ($Rayons as $R){
    //         echo "<option value=".$R->getNomRayon().">".$R->getNomRayon()."</option>";
    //     }
    //     //Création d'un format d'affichage dynamique pour les menu déroulant de type select
    // }
    // public function AjouterRayons(){
    //     //------------------------------
    //     $db = Connexion::connect();
    //     $query = "SELECT NomRayon FROM Rayons WHERE NomRayon = :NomRayon";
    //     $stmt = $db->prepare($query);
    //     $stmt->bindParam(':NomRayon', $this->NomRayon);
    //     $stmt->execute();
    //     if($stmt->rowCount()==0)
    //     //test de l'existence du Rayon
    //     //------------------------------
    //     {
    //         $stmt->closeCursor();
    //         $query = "INSERT INTO Rayons (NomRayon) VALUES (:NomRayon)";
    //         $stmt = $db->prepare($query);
    //         $stmt->bindParam(':NomRayon', $this->NomRayon);
    //         $stmt->execute();
    //     }
}           //INSERTION du rayon dans le cas ou il n'existe pas.
