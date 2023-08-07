<?php

abstract class Connexion {
    //-----------------------------------------------------------------------------
    public static function connect(){
    try {
        $dns = 'mysql:host=localhost;dbname=bibliotheque;charset=utf8';
        $user = 'root';
        $password = '';
        $con = new PDO($dns, $user, $password);
        echo "]connexion réussie[" . '<br><br/>';
        return $con;
    } catch (PDOException $pe){
        
        var_dump(" mysql errors ");
        
        echo 'Erreur : ' . $pe->getMessage() . '<br />';
        
        echo 'N° : ' . $pe->getCode();
        
        die('Fin du script');
    }
}
}
//renvoie les information de connection à la base de données
?>