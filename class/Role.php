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

    //Fonction pour récupérer toutes les informations concernant les roles et retourner un tableau contenant des objets de roles.
    public function getRoles(){

        $roles = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM role');

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $roles[] = new Role($donnees);
        }

        return $roles;
   
    }
}