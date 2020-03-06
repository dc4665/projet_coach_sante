<?php

class Fiche_suivi extends Objet {

    //Attributs de la classe
    private $_id_fiche;
    private $_date_fiche; 
    private $_alimentation;
    private $_activite;
    private $_commentaire;
    private $_actif;
    private $_chemin_photo_face;
    private $_chemin_photo_profil;


    //getters
    public function getId_fiche(){
        return $this->_id_fiche;
    }

    public function getDate_fiche(){
        return $this->_date_fiche;
    }

    public function getAlimentation(){
        return $this->_alimentation;
    }

    public function getActivite(){
        return $this->_activite;
    }

    public function getCommentaire(){
        return $this->_commentaire;
    }

    public function getActif(){
        return $this->_actif;
    }

    public function getChemin_photo_face(){
        return $this->_chemin_photo_face;
    }

    public function getChemin_photo_profil(){
        return $this->_chemin_photo_profil;
    }

    //setters
    public function setId_fiche($id_fiche){
        $this->_id_fiche = $id_fiche;
    }

    public function setDate_fiche($date_fiche){
        $this->_date_fiche = $date_fiche;
    }

    public function setAlimentation($alimentation){
        $this->_alimentation = $alimentation;
    }

    public function setActivite($activite){
        $this->_activite = $activite;
    }

    public function setCommentaire($commentaire){
        $this->_commentaire = $commentaire;
    }

    public function setActif($actif){
        $this->_actif = $actif;
    }

    public function setChemin_photo_face($chemin_photo_face){
        $this->_chemin_photo_face = $chemin_photo_face;
    }

    public function setChemin_photo_profil($chemin_photo_profil){
        $this->_chemin_photo_profil = $chemin_photo_profil;
    }


    //Méthodes de CRUD 
    //Méthode pour ajouter une nouvelle fiche
    public function ajouterFiche($date, $poids, $alimentation, $activite, $commentaire, $actif, $id_personne, $image_1, $image_2){
        
        $sql = $GLOBALS['bdd']->prepare('INSERT INTO fichesuivi (date_fiche, poids, alimentation, activite, commentaire, actif, id_personne, chemin_photo_face, chemin_photo_profil) VALUES (:date, :poids, :alimentation, :activite, :commentaire, :actif, :id_personne, :image_1, :image_2)');

        $sql->bindValue(':date', $date);
        $sql->bindValue(':poids', $poids);
        $sql->bindValue(':alimentation', $alimentation);
        $sql->bindValue(':activite', $activite);
        $sql->bindValue(':commentaire', $commentaire);
        $sql->bindValue(':actif', $actif);
        $sql->bindValue(':id_personne', $id_personne);
        $sql->bindValue(':image_1', $image_1);
        $sql->bindValue(':image_2', $image_2);


        $result = $sql->execute();

        if($result === FALSE){
            return 'Une erreur s\'est produite. Contactez-nous pour en savoir plus';
        }
    }

    //Méthode pour récupérer les fiches de suivis d'un utilisateur précis
    public function getFiches(int $id_personne){

        $fiches = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_personne =' .$id_personne);

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $fiches[] = new Fiche_suivi($donnees);
        }

        return $fiches; 
    }


    //Méthode pour récupérer UNE fiche SEULEMENT
    public function getFiche(int $id_fiche){
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_fiche=' .$id_fiche);

        $sql = $sql->fetch();

        $this->hydrate($sql);

        return $this;
    }

    //Méthde pour récupérer toutes les fiches de suivis de tous les clients qui n'ont pas encore été commentées par un coach.
    public function getAllFichesAttentes(){

        $fiches = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT p.nom, p.prenom, f.date_fiche, f.id_fiche, DATE_FORMAT(f.date_fiche, "%d/%m/%Y") AS date_fiche_fra FROM fichesuivi f LEFT JOIN personne p ON f.id_personne = p.id_personne WHERE f.actif = 0');

        while($donnees = $sql->fetch()){

            $fiches[] = $donnees;
        }

        return $fiches;

        /* $sql = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE actif = 0 ');

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $fiches[] = new Fiche_suivi($donnees);
        }

        return $fiches; */

    }

    
}