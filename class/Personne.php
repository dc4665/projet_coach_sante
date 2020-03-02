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

    //Fonction pour ajouter une nouvelle Personne
    public function ajouterPersonne($nom, $prenom, $tel, $email, $password, $date_naissance, $sexe, $taille, $id_role = 3) {

       $sql = $GLOBALS['bdd']->prepare('INSERT INTO personne (nom, prenom, tel, email, password, date_naissance, sexe, taille, id_role) VALUES (:nom, :prenom, :tel, :email, :password, :date_naissance, :sexe, :taille, :id_role)');

       $sql->bindValue(':nom', $nom);
       $sql->bindValue(':prenom', $prenom);
       $sql->bindValue(':tel', $tel);
       $sql->bindValue(':email', $email);
       $sql->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
       $sql->bindValue(':date_naissance', $date_naissance);
       $sql->bindValue(':sexe', $sexe);
       $sql->bindValue(':taille', $taille);
       $sql->bindValue(':id_role', $id_role);

       $result = $sql->execute();

       if($result === FALSE){
           return 'Une erreur s\'est produite. Contactez-nous pour en savoir plus';
       }

    }


    //Fonction pour vérifier que l'email entré par l'utilisateur est bon lors de la connexion
    public function getUserByEmail($email){

        $check = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM personne WHERE email = "'.$email.'"');
        $check = $check->fetchColumn();

        return $check;
    }

    //Fonction pour récupérer les informations d'un utilisateur après authentification
    public function getPersonneInfos($email){
        
        
        $utilisateur = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE email = "'.$email.'"');

        $utilisateur = $utilisateur->fetch();
        //var_dump($utilisateur);

        $this->hydrate($utilisateur);

        return $this; 
    }

}