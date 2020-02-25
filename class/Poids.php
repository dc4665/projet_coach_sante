<?php

class Poids {
    //Attributs de la classe
    private $_id_poids;
    private $_valeur_poids;
    private $_date_poids;

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