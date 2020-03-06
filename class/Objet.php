<?php
//La super class mère pour étendre les autres class, contient le __construct() et hydrate() communes aux autres class
class Objet {

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

}