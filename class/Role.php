<?php

class Role {

    //Attributs de la classe
    private $_id_role;
    private $_nom_role;

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
    public function getId_role(){
        return $this->_id_role;
    }

    public function getNom_role(){
        return $this->_nom_role;
    }

    //setters
    public function setId_role($id_role){
        $this->_id_role = $id_role;
    }

    public function setNom_role($nom_role){
        $this->_nom_role = $nom_role;
    }

}