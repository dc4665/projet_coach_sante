<?php
/**
*\brief Cette Classe hérite de la classe Objet pour pouvoir utiliser les methodes __construct() et hydrate(). Cette classe est utlisée pour tous les utilisateurs du site (administrateur, coach, membre/client). 
 */

class Personne extends Objet {

    /** Attributs de la classe. $_date_naissance ,  $_taille , &_sexe peuvent être NULL
     * 
     */
    private $_id_personne;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_taille;
    private $_sexe;
    private $_date_naissance;
    private $_password;
    private $_id_role;


    /** Les méthodes getters pour récupérer les attributs de l'objet instancié.
     */
    public function getId_personne(){
        return $this->_id_personne;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getTel(){
        return $this->_tel; 
    }

    public function getEmail(){
        return $this->_email;
    }

    public function getTaille(){
        return $this->_taille;
    }

    public function getSexe(){
        return $this->_sexe;
    }

    public function getDate_naissance(){
        return $this->_date_naissance;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getId_role(){
        return $this->_id_role;
    }

    /** Les méthodes setters pour affecter les attributs de l'objet instancié. Principalement activé par la fonction hydrate() de la classe parent Objet.
     */
    public function setId_personne($id_personne){
        $this->_id_personne = $id_personne; 
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }

    public function setTel($tel){
        $this->_tel = $tel;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

    public function setTaille($taille){
        $this->_taille = $taille;
    }
    
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }

    public function setDate_naissance($date_naissance){
        $this->_date_naissance = $date_naissance;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function setId_role($id_role){
        $this->_id_role = $id_role;
    }


    //Fonctions supplémentaires

    /** Méthode pour ajouter une nouvelle Personne. Utilisé dans le fichier inscriptionController.php
     * @param string $nom
     * @param string $prenom
     * @param int $tel
     * @param string $email
     * @param string $password
     * @param string $date_naissance
     * @param string $sexe
     * @param int $taille
     * @param int id_role
     */
    public function ajouterPersonne(string $nom, string $prenom, int $tel, string $email, string $password, string $date_naissance, string $sexe, int $taille, int $id_role = 3) {

       /** Préparation de la requête sql pour ajouter un nouvel utilisateur à la base de donnée, puis exécution de la requête */
        $sql = $GLOBALS['bdd']->prepare('INSERT INTO personne (nom, prenom, tel, email, password, date_naissance, sexe, taille, id_role) VALUES (:nom, :prenom, :tel, :email, :password, :date_naissance, :sexe, :taille, :id_role)');

       $sql->bindValue(':nom', $nom);
       $sql->bindValue(':prenom', $prenom);
       $sql->bindValue(':tel', $tel);
       $sql->bindValue(':email', $email);
       $sql->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
       $sql->bindValue(':date_naissance', $date_naissance);
       $sql->bindValue(':sexe', $sexe);
       $sql->bindValue(':taille', $taille);
       $sql->bindValue(':id_role', $id_role);

       $result = $sql->execute();

       if($result === FALSE){
           return 'Une erreur s\'est produite. Contactez-nous pour en savoir plus';
       } else {
            /**Instantacion d'un nouvel objet de la class Mail auquel on passe un array de données pour activer la fonction hydrate() et set les attribues.*/
            $mail = new Mail([
                
                'to' => $email,
                'subject' => 'Bienvenu sur Coach Santé!',
                'template' => 'bienvenu'

            ]);

            /**Préparation d'un tableau associatif comprenant des données pour personnaliser le template du mail envoyé */
            $data = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email
            ];
            /**Appel à la méthode send() de l'objet $mail pour envoyer l'email de bienvenu. On passe à la méthode send() le tableau associatif de données. */ 
            $mail->send($data);

       }

    }

    /** Méthode pour mettre à jour les informations de l'utilisateur. Utilisé par les membres / clients. 
     * @param string $nom
     * @param string $prenom
     * @param int $tel
     * @param string $email
    */
    public function updatePersonne(string $nom, string $prenom, int $tel, string $email, int $id_personne){
        /** Préparation de la requête sql pour faire un UPDATE dans la base de données, puis exécutin de la requête */
        $sql = $GLOBALS['bdd']->prepare('UPDATE personne SET nom = :nom, prenom = :prenom, tel = :tel, email = :email WHERE id_personne = ' .$id_personne);

        $sql->bindValue(':nom', $nom);
        $sql->bindValue(':prenom', $prenom);
        $sql->bindValue(':tel', $tel);
        $sql->bindValue(':email', $email);

        $result = $sql->execute();

        /** On réaffecte les nouvelles valeurs dans la session actuelle pour que l'utilisateur puisse voir ses informations modifiées immédiatement.*/
        $_SESSION['utilisateur']->setNom($nom);
        $_SESSION['utilisateur']->setPrenom($prenom);
        $_SESSION['utilisateur']->setTel($tel);
        $_SESSION['utilisateur']->setEmail($email);
    

        if($result === FALSE){
            return 'Une erreur est survenue lors de l\'update'; 
        }

    }


    /** Méthode utilisée par l'administrateur pour modifier les informations d'un utilisateur et son rang (mais pas son password). 
     * @param string $nom
     * @param string $prenom
     * @param int $tel
     * @param string $email
     * @param int $id_role
     * @param int $id_personne
    */
    public function updatePersonneAdmin(string $nom, string $prenom, int $tel, string $email, int $id_role, int $id_personne){

        $sql = $GLOBALS['bdd']->prepare('UPDATE personne SET nom = :nom, prenom = :prenom, tel = :tel, email = :email, id_role = :id_role WHERE id_personne = ' .$id_personne);

        $sql->bindValue('nom', $nom);
        $sql->bindValue('prenom', $prenom);
        $sql->bindValue('tel', $tel);
        $sql->bindValue('email', $email);
        $sql->bindValue('id_role', $id_role);

        $result = $sql->execute();

        if($result === FALSE){
            return 'Une erreur est survenue lors de l\'update'; 
        }

    }


    /** Méthode pour vérifier que l'email entré par l'utilisateur est bon lors de la connexion et aussi pour empêcher qu'un utilisateur s'inscrive avec une adresse email déjà existante. 
     * @param string $email
     * @return $check qui correspond à un chiffre. 1 si l'email a été retrouvé, 0 dans le cas contraire.
     */
    public function getUserByEmail(string $email){
        /**On compte le nombre de colone correspondant à l'email passé en paramètre. Normalement on aura 1 ou 0. */
        $check = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM personne WHERE email = "'.$email.'"');
        $check = $check->fetchColumn();

        return $check;
    }

    /** Méthode pour récupérer les informations d'un utilisateur après authentification 
     * @param string $email
     * @return $this un objet de la classe Personne avec tous ses attributs. 
    */
    public function getPersonneInfos(string $email){
        
        
        $utilisateur = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE email = "'.$email.'"');

        $utilisateur = $utilisateur->fetch();

        $this->hydrate($utilisateur);

        return $this; 
    }

    /** Méthode pour récupérer le nom d'un coach selon l'id d'une fiche de suivi 
     * @param int $id_fiche
     * @return $sql le nom du coach qui a commenté la fiche de suivi.
    */
    public function getPrenomCoach(int $id_fiche){

        $sql = $GLOBALS['bdd']->query('SELECT prenom FROM personne INNER JOIN commentaire ON personne.id_personne = commentaire.id_personne WHERE commentaire.id_fiche =' .$id_fiche);

        $sql = $sql->fetchColumn();

        return $sql;
    }

    /** Méthode pour récupérer TOUTES les informations de TOUS les utilisateurs du site ainsi que le nom de leur ROLE qui se trouve sur une autre table. 
     * @return $personnes Le résultat retourné est un array contenant les informations de toutes les personnes et leurs rôles. */
    public function getAllPersonnes(){

        $personnes = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM personne p INNER JOIN role r ON p.id_role = r.id_role');
        /** Les données de chaque personne sont placées dans un tableau */
        while($donnees = $sql->fetch()){

            $personnes[] = $donnees;
        }

        return $personnes;
    }

    /** Méthode utilisée pour récupérer toutes les informations d'une personne. Seulement utilisé par l'administrateur. 
     * @param int $id_personne
     * @return $this un objet de classe Personne hydraté. 
    */
    public function getPersonne(int $id_personne){

        $sql = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE id_personne =' .$id_personne);

        $sql = $sql->fetch();

        $this->hydrate($sql);

        return $this;
    }

    /** Méthode écrite par Léo pour retrouver un personne par son nom ou prénom via une barre de recherche 
     * @param string $recherche
     * @return $client un tableau avec les informations de la personne sous forme d'objet. 
    */
    public function recherchePersonne(string $recherche){
        $client = [];

        $sql = $GLOBALS['bdd']->query('SELECT id_personne, nom, prenom, tel, email, date_naissance, sexe, taille  FROM personne WHERE prenom LIKE "%'.$recherche.'%" OR nom LIKE "%'.$recherche.'%"');

        while($donnees = $sql->fetch()){

            $client[] = new Personne($donnees);
        }

        return $client;
    }

    /** Méthode pour connaître le nombre de fiches de suivi que possède une personne
     * @param int $id_personne
     * @return $nb retourne le nombre de fiches de suivi que possède une personne.
     */
    public function getNombreFiche($id_personne){
        $sql = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM fichesuivi WHERE id_personne='.$id_personne);

        $nb = $sql->fetchColumn();

        return $nb;
    }

    /** Méthode utilisée par l'administrateur pour supprimer un utilisateur.
     * @param int $id_personne
    */
    public function deletePersonne(int $id_personne){

        /** On doit d'abord supprimer tous les commentaires liés à une fiche de suivi. On prépare la requête. */
        $commentaires = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_personne =' .$id_personne);
        $commentaires = $commentaires->fetchall();
        /** On efface tous les commentaires liés à une fiche de suivi */
        foreach($commentaires as $value){

            $sql = $GLOBALS['bdd']->prepare('DELETE FROM commentaire WHERE id_fiche =' .$value['id_fiche']);
            $result = $sql->execute();
        }

        /** On supprime les fiches de suivi liées à l'utilisateur avant de pouvoir le supprimer. */
        $sql = $GLOBALS['bdd']->prepare('DELETE FROM fichesuivi WHERE id_personne = '.$id_personne);
        
        $result = $sql->execute();

        /** On supprime enfin l'utilisateur */
        $sql = $GLOBALS['bdd']->prepare('DELETE FROM personne WHERE id_personne = '.$id_personne);

        $result = $sql->execute(); 

    }


}