<?php require_once './model/LivresManager.class.php' ?>
<?php require_once './model/RayonsManager.class.php' ?>

<?php 
class Controller{
    protected $action;

    public function __construct($action){
        $this->action = $action;


    }
    //getter & setter
    public function getAction(){
        return $this->action;
    }
    public function setAction($action){
        $this->action = $action;
    }

//--------------------------------------------------------------------------------------------------------------------------------------------------
    public function ControlInputAddLivre(){
    if($this->action =='ajoutLivre'){
        if (empty($_FILES['file'])==false AND empty($_POST['NomRayon'])==false AND empty($_POST['PrenomAuteur'])==false AND empty($_POST['NomAuteur'])==false AND empty($_POST['LivreResume'])==false) {
            echo "transfert réussi";
            //--------------------------------------------

            //input sanitization
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
        
            $dotPosition = strrpos($name, '.');
            $stringAfterDot = substr($name, $dotPosition + 1);
            $randomNumber = rand(0, 5000000);
            $name = $randomNumber . time() . '.' . $stringAfterDot;
            $imgpath = 'view/Images/'.$name;
            // if(move_uploaded_file($tmpName, 'view/Images/'.$name)){
            //     echo "l'image à bien été ajoutée";
            // }else{
            //     echo "c'est de la merde";
            // }
            $reg = '/^[a-zA-Z-\'éèçàù!]{3,35}$/';
            $regtitre = '/^[a-zA-Z-0-9\'éèçàù! ]{3,35}$/';
            $regprenom = '/^[a-zA-Z-\'éèçàù!]{3,35}$/';
            if(preg_match($regtitre, $_POST['Titre'] ) AND preg_match($regprenom, $_POST['PrenomAuteur']) AND preg_match($regprenom, $_POST['NomAuteur'])){
                move_uploaded_file($tmpName, 'view/Images/'.$name);
                $manager = new LivresManager(null,$_POST['Titre'], $imgpath, $_POST['NomRayon'], $_POST['PrenomAuteur'], $_POST['NomAuteur'], $_POST['LivreResume']);
                $manager->AjouterLivres();
            }
            
            }else{echo 'transfert non réussi';}
        }else {echo 'paramètre non valide';}
    }
    public function ControlInputAddCat(){
        if(empty($_POST['NewRayon'])==false AND $_GET['action']=='ajoutCat'){
                //--------------------------------------------
                $expr = $_POST['NewRayon'];
                $reg = '/^[a-zA-Z-\'éèçàù!]{3,35}$/';
                if(preg_match($reg, $expr)){
                    $Rayons = new Rayons($_POST['NewRayon']);
                    $Rayons->AjouterRayons();
                    header ('Location: /admin/addRayon?action=reussi');
                }else{
                    header ('Location: /admin/addRayon?action=erreur');
                }
                //input sanitization
                
            }else{echo 'transfert non réussi';}
    }
    public function ControlInputSuprrLivres(){
        if($this->action == 'supprLivre'){
            foreach($_POST['suppr'] as $L){
                $manager = new LivresManager('dummy','dummy',$L,'dummy','dummy','dummy','dummy');
                $manager->SupprimerLivre();
            }
        }
    }
    public function ControlInputModifLivre(){
        
    }
    
}
?>