<?php

class Role extends Objet {

    //Attributs de la classe
    private $_id_role;
    private $_nom_role;


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