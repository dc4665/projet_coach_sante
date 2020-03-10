<?php
/**
*\brief Cette Classe hérite de la classe Objet pour pouvoir utiliser les methodes __construct() et hydrate(). Cette classe est utlisée pour déterminer le rôle d'un utilisateur inscrit sur le site.  (administrateur, coach, membre/client). 
 */
class Role extends Objet {

    /** Attributs de la classe 
     * 
    */
    private $_id_role;
    private $_nom_role;


    /** Les méthodes getters pour récupérer les attributs de l'objet instancié.
     */
    public function getId_role(){
        return $this->_id_role;
    }

    public function getNom_role(){
        return $this->_nom_role;
    }

    /** Les méthodes setters pour affecter les attributs de l'objet instancié. Principalement activé par la fonction hydrate() de la classe parent Objet.
    */
    public function setId_role($id_role){
        $this->_id_role = $id_role;
    }

    public function setNom_role($nom_role){
        $this->_nom_role = $nom_role;
    }

    /** Méthode pour récupérer toutes les informations concernant les roles et retourner un tableau contenant des objets de la classe Role. 
     * @return array $roles
    */
    public function getRoles(){

        $roles = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM role');

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $roles[] = new Role($donnees);
        }

        return $roles;
   
    }
}