<?php
/**
*\brief Cette Classe hérite de la classe Objet pour pouvoir utiliser les methodes __construct() et hydrate(). Cette classe est utlisée pour gérer les fiches de suivi des membres/clients. 
 */
class Fiche_suivi extends Objet {

    /** Attributs de la classe. $_date_naissance ,  $_taille , &_sexe peuvent être NULL
     * 
     */
    private $_id_fiche;
    private $_date_fiche; 
    private $_alimentation;
    private $_activite;
    private $_commentaire;
    private $_actif;
    private $_chemin_photo_face;
    private $_chemin_photo_profil;


    /** Les méthodes getters pour récupérer les attributs de l'objet instancié.
     */
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

     /** Les méthodes setters pour affecter les attributs de l'objet instancié. Principalement activé par la fonction hydrate() de la classe parent Objet.
     */
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


    /** Méthode pour ajouter une nouvelle fiche de suivi
     * @param string $date
     * @param int $poids
     * @param string $alimentation
     * @param string $activite
     * @param string $commentaire
     * @param int $actif
     * @param int $id_personne
     * @param string $image_1
     * @param string $image_2
     */
    public function ajouterFiche(string $date, int $poids, string $alimentation, string $activite, string $commentaire, int $actif, int $id_personne, string $image_1, string $image_2){
        
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

    /** Méthode pour récupérer les fiches de suivis d'un utilisateur précis 
     * @param int $id_personne
     * @return array $fiches
    */
    public function getFiches(int $id_personne){

        $fiches = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_personne = ' .$id_personne. ' ORDER BY date_fiche DESC');

        while($donnees = $sql->fetch(PDO::FETCH_ASSOC)){

            $fiches[] = new Fiche_suivi($donnees);
        }

        return $fiches; 
    }


    /** Méthode pour récupérer UNE fiche de suivi SEULEMENT 
     * @param int $id_fiche
     * @return new Fiche()
    */
    public function getFiche(int $id_fiche){
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_fiche=' .$id_fiche);

        $sql = $sql->fetch();

        $this->hydrate($sql);

        return $this;
    }

    /** Méthode pour récupérer toutes les fiches de suivis de tous les clients qui n'ont pas encore été commentées par un coach. \
     * @return array $fiches
    */
    public function getAllFichesAttentes(){

        $fiches = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT p.nom, p.prenom, f.date_fiche, f.id_fiche FROM fichesuivi f LEFT JOIN personne p ON f.id_personne = p.id_personne WHERE f.actif = 0');

        while($donnees = $sql->fetch()){

            $fiches[] = $donnees;
        }

        return $fiches;

    }

    
}