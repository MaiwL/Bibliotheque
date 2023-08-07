<?php require_once 'BDDlink/connexion.class.php';
class LivresManager extends Connexion{
    protected $idLivre;
    protected $Titre;
    protected $imgpath;
    protected $NomRayon;
    protected $PrenomAuteur;
    protected $NomAuteur;
    protected $LivreResume;


    public function __construct($idLivre,$Titre, $imgpath, $NomRayon, $PrenomAuteur, $NomAuteur, $LivreResume){
        $this->idLivre = $idLivre;
        $this->Titre = $Titre;
        $this->imgpath = $imgpath;
        $this->NomRayon = $NomRayon;
        $this->PrenomAuteur = $PrenomAuteur;
        $this->NomAuteur = $NomAuteur;
        $this->LivreResume = $LivreResume;
    }
    public function __tostring(){
        return "Titre: $this->Titre , imgpath: $this->imgpath , NomRayon: $this->NomRayon , PrenomAuteur: $this->PrenomAuteur , NomAuteur: $this->NomAuteur";
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
    public function getLivreResume(){
        return $this->LivreResume;
    }
    public function setLivreResume($LivreResume){
        $this->LivreResume = $LivreResume;
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
            $query = "INSERT INTO Livres (Titre,idRayon,imgpath,LivreResume) VALUES (:Titre,(SELECT idRayon FROM Rayons WHERE NomRayon = :NomRayon),:imgpath,:LivreResume)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':Titre', $this->Titre);
            $stmt->bindParam(':NomRayon', $this->NomRayon);
            $stmt->bindParam(':imgpath', $this->imgpath);
            $stmt->bindParam(':LivreResume', $this->LivreResume);
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
        public function SupprimerLivre(){
            //-----------------------------------------------------------------------------
            $query = "SELECT Livres.idLivre, Auteurs.idAuteur FROM Livres
            INNER JOIN correspond ON correspond.idLivre = Livres.idLivre 
            INNER JOIN Auteurs ON correspond.idAuteur = Auteurs.idAuteur
            where imgpath = :imgpath";
            $db = Connexion::connect();
            $stmt = $db->prepare($query);
            $stmt->bindParam(':imgpath', $this->imgpath);
            $stmt->execute();
            $Livres = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Livres_array=[];
            $cor = [];
            $i=0;
            foreach ($Livres as $L){ 
            array_push($Livres_array,$L);
            }
            foreach($Livres_array as $L){
                foreach($L as $I){
                    $cor[$i] = $I;
                    $i++;
                }
            }
            $idlivre = $cor[0];
            $idauteur = $cor[1];
            //récupération des idLivre et idAuteur pertinent par une requète puis extraction du résultat de la requete du tableau
            //-----------------------------------------------------------------------------
            echo "idLivre : " . $idlivre . "<br> idAuteur : " . $idauteur;
            // debug 
            //-----------------------------------------------------------------------------
            $stmt->closeCursor();
            $query = "DELETE FROM correspond WHERE idLivre = :idLivre AND idAuteur = :idAuteur";
            $stmt = $db->prepare($query);                     
            $stmt->bindParam(':idLivre', $idlivre);
            $stmt->bindParam(':idAuteur', $idauteur);
            $stmt->execute();
            $stmt->closeCursor();
            //suppression de la correspondance car contrainte empéchant la modification et suppression dans le cas ou la correspondance existe
            //-----------------------------------------------------------------------------
            $query = "DELETE FROM Livres WHERE idLivre = :idLivre";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':idLivre', $idlivre);
            $stmt->execute();
            $stmt->closeCursor();
            //suppression du Livre
            //-----------------------------------------------------------------------------
            $query = "DELETE FROM Auteurs WHERE idAuteur = :idAuteur";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':idAuteur', $idauteur);
            $stmt->execute();
            $stmt->closeCursor();
            //suppression de l'auteur
            //-----------------------------------------------------------------------------
            if(unlink($this->imgpath)){
                echo "L'image a bien été supprimée";
            }else{
                echo "L'image n'a pas pu être supprimée";
            }
        }   //Suppression de l'image dans le dossier
            //-----------------------------------------------------------------------------
            //suppression totalement effectuée

        

}
