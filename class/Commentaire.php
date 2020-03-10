<?php
/**
*\brief Cette Classe hérite de la classe Objet pour pouvoir utiliser les methodes __construct() et hydrate(). Cette classe est utlisée pour gérer les commentaires des coachs sur les fiches de suivi des clients. 
 */
class Commentaire extends Objet {

    /** Attributs de la classe. $_date_naissance ,  $_taille , &_sexe peuvent être NULL */
    private $_alimentation_coach;
    private $_activite_coach;
    private $_commentaire_coach;


    /** Les méthodes getters pour récupérer les attributs de l'objet instancié.
     */
    public function getAlimentation_coach(){
        return $this->_alimentation_coach;
    }

    public function getActivite_coach(){
        return $this->_alimentation_coach;
    }

    public function getCommentaire_coach(){
        return $this->_alimentation_coach;
    }

    /** Les méthodes setters pour affecter les attributs de l'objet instancié. Principalement activé par la fonction hydrate() de la classe parent Objet.
     */
    public function setAlimentation_coach($alimentation_coach){
        return $this->_alimentation_coach = $alimentation_coach;
    }

    public function setActivite_coach($activite_coach){
        return $this->_activite_coach = $activite_coach;
    }

    public function setCommentaire_coach($commentaire_coach){
        return $this->_commentaire_coach = $commentaire_coach;
    }


    /** Méthode pour ajouter un commentaire de Coach dans la BDD 
     * @param string $alimentation_coach
     * @param string $activite_coach
     * @param string $commentaire_coach
     * @param int $id_personne
     * @param int $id_fiche
    */
    public function addCommentaire(string $alimentation_coach, string $activite_coach, string $commentaire_coach, int $id_personne, int $id_fiche){

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

    /** Méthode pour récupérer les commentaires d'un coach sur une fiche de suivi selon son id_fiche 
     * @param int $id_fiche
     * @return array $commentaire
    */
    public function getCommentaires(int $id_fiche){

        $commentaires = [];

        $sql = $GLOBALS['bdd']->query('SELECT * FROM commentaire WHERE id_fiche =' .$id_fiche);

        while($donnees = $sql->fetch()){

            $commentaires[] = $donnees;
        }

        return $commentaires;

    }

    /** Méthode pour vérifier si une fiche de suivi a été commentée par un coach ou pas, retourne 1 si c'est le cas, 0 dans le cas contraire 
     * @param int $id_fiche
    */
    public function checkCommentaire(int $id_fiche){
        
        $sql = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM commentaire c INNER JOIN fichesuivi f ON c.id_fiche = f.id_fiche WHERE c.id_fiche =' .$id_fiche);

        $result = $sql->fetchColumn();

        return $result;
    }
}