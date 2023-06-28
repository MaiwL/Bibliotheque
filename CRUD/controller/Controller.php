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
        if (empty($_FILES['file'])==false AND empty($_POST['NomRayon'])==false AND empty($_POST['PrenomAuteur'])==false AND empty($_POST['NomAuteur'])==false) {
            echo "transfert réussi";
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
        
            $dotPosition = strrpos($name, '.');
            $stringAfterDot = substr($name, $dotPosition + 1);
            $randomNumber = rand(0, 5000000);
            $name = $randomNumber . time() . '.' . $stringAfterDot;
            $imgpath = 'view/Images/'.$name;
            move_uploaded_file($tmpName, 'view/Images/'.$name);
            $manager = new LivresManager($_POST['Titre'], $imgpath, $_POST['NomRayon'], $_POST['PrenomAuteur'], $_POST['NomAuteur']);
            $manager->AjouterLivres();
            }else{echo 'transfert non réussi';}
        }else {echo 'paramètre non valide';}
    }
    public function ControlInputAddCat(){
        if(empty($_POST['NewRayon'])==false){
                $Rayons = new Rayons($_POST['NewRayon']);
                $Rayons->AjouterRayons();
            }else{echo 'transfert non réussi';}
    }
}
?>