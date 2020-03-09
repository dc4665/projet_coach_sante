<?php
/**
*
*\brief La super classe mère pour étendre les autres classe, contient le __construct() et hydrate() communes aux autres classe
*/
class Objet {

    /** 
    * Constructeur
    * Méthode __construct qui va s'excecuter à l'instantacion de l'objet. Elle exécute une autre fonction: hydrate(). On donne la possibilité à la fonction de recevoir un array = NULL pour pouvoir instancier des Objets vides afin d'utiliser leurs méthodes.
    * @param array $donnees 
    */
    public function __construct(array $donnees = NULL){
        
        if(isset($donnees)){
            $this->hydrate($donnees);
        }
    }

    /**
    * Méthode hydrate() pour "hydrater les objets lors de leur création". Cette fonction va faire appel à tous les setters existants dans nos class. 
    * @param array $donnees
    */
    public function hydrate(array $donnees){
        
        foreach($donnees as $key=>$value){

            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method)){

                $this->$method($value);
            }
        }
    }

}