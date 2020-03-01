<?php

class Poids extends Objet {
    //Attributs de la classe
    private $_id_poids;
    private $_valeur_poids;
    private $_date_poids;



    //getters
    public function getId_poids(){
        return $this->_id_poids;
    }

    public function getValeur_poids(){
        return $this->_valeur_poids;
    }

    public function getDate_poids(){
        return $this->_date_poids; 
    }

    //setters
    public function setId_poids($id_poids){
        $this->_id_poids = $id_poids;
    }

    public function setValeur_poids($valeur_poids){
        $this->_valeur_poids = $valeur_poids; 
    }

    public function setDate_poids($date_poids){
        $this->_date_poids = $date_poids;
    }

}