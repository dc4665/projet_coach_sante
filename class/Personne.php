<?php

class Personne {

    //Attributs de la classe
    private $_id_personne;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_password;


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


    //getters
    public function getId_personne(){
        return $this->_id_personne;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getTel(){
        return $this->_tel; 
    }

    public function getEmail(){
        return $this->_email;
    }

    public function getPassword(){
        return $this->_password;
    }

    //setters
    public function setId_personne($id_personne){
        $this->_id_personne = $id_personne; 
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function setTel($tel){
        $this->_tel = $tel;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

    public function setPassword($password){
        $this->_password = $password;
    }


    //Fonctions supplémentaires

    //Fonction pour qu'un client puisse s'authentifier
    public function checklogin($email, $password){

        $check = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM personne WHERE email = "'.$email.'" AND password = "'.$password.'"');
        $check = $check->fetchColumn();
        //var_dump($check);

        return $check;
    }

    //Fonction pour récupérer les informations d'un client après authentification
    public function getClientInfos($email){
        
        
        $client = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE email = "'.$email.'"');

        $client = $client->fetch();
        //var_dump($client);

        $this->hydrate($client);

        return $this; 
    }

}