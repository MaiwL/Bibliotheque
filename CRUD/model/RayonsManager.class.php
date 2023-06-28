<?php require_once 'model/BDDlink/connexion.class.php'?>

<?php
class Rayons extends Connexion {
    protected $NomRayon;

    public function __construct($NomRayon){
        
        $this->NomRayon = $NomRayon;
    }
    public function __tostring(){
        return "NomRayon: $this->NomRayon";
    }
    //getter & setter
    
    
    public function getNomRayon(){
        return $this->NomRayon;
    }
    public function setNomRayon($NomRayon){
        $this->NomRayon = $NomRayon;
    }
    public static function ObjToArrayRayon(){
        //-------------------------------------------
        $query = "SELECT * FROM Rayons";
        $db = Connexion::connect();
        $stmt = $db->prepare($query);
        $stmt->execute();
        $Rayons = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $Rayons_array=[];
        foreach ($Rayons as $L){
        $tmp= new Rayons($L['NomRayon']);
        array_push($Rayons_array,$tmp);
        }
        return $Rayons_array;
        //Récupération de toute les lignes de la table 'Rayons' à des fins d'affichage.
    }
    
    public static function affichageRayonsMenu(){
        //-------------------------------------------
        $Rayons = Rayons::ObjToArrayRayon();
        foreach ($Rayons as $R){
            echo "<option value=".$R->getNomRayon().">".$R->getNomRayon()."</option>";
        }
        //Création d'un format d'affichage dynamique pour les menu déroulant de type select
    }
    public function AjouterRayons(){
        //------------------------------
        $db = Connexion::connect();
        $query = "SELECT NomRayon FROM Rayons WHERE NomRayon = :NomRayon";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':NomRayon', $this->NomRayon);
        $stmt->execute();
        if($stmt->rowCount()==0)
        //test de l'existence du Rayon
        //------------------------------
        {
            $stmt->closeCursor();
            $query = "INSERT INTO Rayons (NomRayon) VALUES (:NomRayon)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':NomRayon', $this->NomRayon);
            $stmt->execute();
        }
}           //INSERTION du rayon dans le cas ou il n'existe pas.
}