<?php
//La super class mère pour étendre les autres class, contient le __construct() et hydrate() communes aux autres class
class Objet {

    //Méthode __construct qui va s'excecuter à l'instantacion de l'objet
    public function __construct(array $donnees = NULL){
        
        if(isset($donnees)){
            $this->hydrate($donnees);
        }
    }

    //Méthode hydrate() pour "hydrater les objets lors de leur création"
    public function hydrate(array $donnees){
        
        foreach($donnees as $key=>$value){

            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method)){

                $this->$method($value);
            }
        }
    }


    //Connexion à la BDD, pour le moment pas utilisé
    //function pour se connecter à la bdd et créer un objet PDO
    /* function connexionpdo(){
        try{ //va essayer de se connecter à la BDD
            $bdd = new PDO('mysql:host='.HOST.';dbname='.BDD, USER, PASSWORD);
            return $bdd; 
        }
        //PDOException va afficher un message d'erreur grâce à sa methode getMessage s'il n'arrive pas à se connecter à la bdd. 
        catch(PDOException $except){
            echo('Echec de la connexion à la base de données: '.$except->getMessage());
            return FALSE;
            exit();
        }

    } */

}