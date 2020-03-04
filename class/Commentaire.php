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


    //Méthode CRUD

    //Méthode pour ajouter un commentaire de Coach dans la BDD
    public function addCommentaire($alimentation_coach, $activite_coach, $commentaire_coach, $id_personne, $id_fiche){

        $sql = $GLOBALS['bdd']->prepare('INSERT INTO commentaire (alimentation_coach, activite_coach, commentaire_coach, id_personne, id_fiche) VALUES (:alimentation_coach, :activite_coach, :commentaire_coach, :id_personne, :id_fiche)');

        $sql->bindValue(':alimentation_coach', $alimentation_coach);
        $sql->bindValue(':activite_coach', $activite_coach);
        $sql->bindValue(':commentaire_coach', $commentaire_coach);
        $sql->bindValue(':id_personne', $id_personne);
        $sql->bindValue(':id_fiche', $id_fiche);

        $result = $sql->execute();

        $check = $GLOBALS['bdd']->prepare('UPDATE fichesuivi SET actif = 1 WHERE id_fiche =' .$id_fiche);

        $resultcheck = $check->execute();
        
        if($result === FALSE){
            return 'Une erreur s\'est produite.';
        }

    }

    //Méthode pour récupérer les commentaires d'un coach sur une fiche de suivi
    public function getCommentaires($id_fiche){

        $commentaires = [];

        $sql = $GLOBALS['bdd']->query('SELECT * FROM commentaire WHERE id_fiche =' .$id_fiche);

        while($donnees = $sql->fetch()){

            $commentaires[] = $donnees;
        }

        return $commentaires;

    }

    //Méthode pour vérifier si une fiche de suivi a été commentée par un coach ou pas, retourne 1 si c'est le cas, 0 dans le cas contraire
    public function checkCommentaire($id_fiche){
        
        $sql = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM commentaire c INNER JOIN fichesuivi f ON c.id_fiche = f.id_fiche WHERE c.id_fiche =' .$id_fiche);

        $result = $sql->fetchColumn();

        return $result;
    }
}