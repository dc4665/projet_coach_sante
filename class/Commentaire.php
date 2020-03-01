<?php

class Commentaire extends Objet {

    //Attributs de la classe
    private $_alimentation_coach;
    private $_activite_coach;
    private $_commentaire_coach;


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