<?php

class Fiche_suivi {

    //Attributs de la classe
    private $_id_fiche;
    private $_date_fiche; 
    private $_alimentation;
    private $_activite;
    private $_commentaire;
    private $_chemin_photo_face;
    private $_chemin_photo_profile;

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
    public function getId_fiche(){
        return $this->_id_fiche;
    }

    public function getDate_fiche(){
        return $this->_date_fiche;
    }

    public function getAlimentation(){
        return $this->_alimentation;
    }

    public function getActivite(){
        return $this->_activite;
    }

    public function getCommentaire(){
        return $this->_commentaire;
    }

    public function getChemin_photo_face(){
        return $this->_chemin_photo_face;
    }

    public function getChemin_photo_profile(){
        return $this->_chemin_photo_profile;
    }

    //setters
    public function setId_fiche($id_fiche){
        $this->_id_fiche = $id_fiche;
    }

    public function setDate_fiche($date_fiche){
        $this->_date_fiche = $date_fiche;
    }

    public function setAlimentation($alimentation){
        $this->_alimentation = $alimentation;
    }

    public function setActivite($activite){
        $this->_activite = $activite;
    }

    public function setCommentaire($commentaire){
        $this->_commentaire = $commentaire;
    }

    public function setChemin_photo_face($chemin_photo_face){
        $this->_chemin_photo_face = $chemin_photo_face;
    }

    public function setChemin_photo_profile($chemin_photo_profile){
        $this->_chemin_photo_profile = $chemin_photo_profile;
    }


    //Méthodes de CRUD 

    //Méthode pour récupérer les fiches de suivis
    public function getFiches(int $id_personne){

        $fiches = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * from fichesuivi WHERE id_personne =' .$id_personne);

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $fiches[] = new Fiche_suivi($donnees);
        }

        return $fiches; 
    }


    //Méthode pour récupérer UNE fiche SEULEMENT
    public function getFiche(int $id_fiche){
        
        $sql = $GLOBALS['bdd']->query('SELECT * from fichesuivi WHERE id_fiche=' .$id_fiche);

        $sql = $sql->fetch();

        $this->hydrate($sql);

        return $this;
    }
}