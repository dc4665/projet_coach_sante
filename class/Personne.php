<?php

class Personne extends Objet {

    //Attributs de la classe
    private $_id_personne;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_password;
    private $_id_role;


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

    public function getId_role(){
        return $this->_id_role;
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

    public function setId_role($id_role){
        $this->_id_role = $id_role;
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
    public function getPersonneInfos($email){
        
        
        $client = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE email = "'.$email.'"');

        $client = $client->fetch();
        //var_dump($client);

        $this->hydrate($client);

        return $this; 
    }

}