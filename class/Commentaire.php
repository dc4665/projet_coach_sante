<?php

class Commentaire {

    //Attributs de la classe
    private $_alimentation_coach;
    private $_activite_coach;
    private $_commentaire_coach;

    //Méthode __construct qui va s'excecuter à l'instantacion de l'objet
    public function __construct(array $donnees){
        $this->hydrate($donnees);
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
    public function getAlimentation_coach(){
        return $this->_alimentation_coach;
    }

    public function getActivite_coach(){
        return $this->_alimentation_coach;
    }

    public function getCommentaire_coach(){
        return $this->_alimentation_coach;
    }

    //setters
    public function setAlimentation_coach($alimentation_coach){
        return $this->_alimentation_coach = $alimentation_coach;
    }

    public function setActivite_coach($activite_coach){
        return $this->_activite_coach = $activite_coach;
    }

    public function setCommentaire_coach($commentaire_coach){
        return $this->_commentaire_coach = $commentaire_coach;
    }

}