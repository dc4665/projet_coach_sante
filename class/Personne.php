<?php

class Personne extends Objet {

    //Attributs de la classe
    private $_id_personne;
    private $_nom;
    private $_prenom;
    private $_tel;
    private $_email;
    private $_taille;
    private $_date_naissance;
    private $_password;
    private $_id_role;


    //getters
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

    public function getDate_naissance(){
        return $this->_date_naissance;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getId_role(){
        return $this->_id_role;
    }

    //setters
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

    //Fonction pour ajouter une nouvelle Personne
    public function ajouterPersonne($nom, $prenom, $tel, $email, $password, $date_naissance, $sexe, $taille, $id_role = 3) {

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
            //Envoie un email au moment de l'inscription de la personne

            $mail = new Mail([
                
                'to' => $email,
                'subject' => 'Bienvenu sur Coach Santé!',
                'template' => 'bienvenu'

            ]);

            //Création du tableau de variable pour personnaliser le template
            $data = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email
            ];

            $mail->send($data);

       }

    }

    //Méthode pour mettre à jour les informations de l'utilisateur. Utilisé par les membres / clients.
    public function updatePersonne($nom, $prenom, $tel, $email, $id_personne){

        $sql = $GLOBALS['bdd']->prepare('UPDATE personne SET nom = :nom, prenom = :prenom, tel = :tel, email = :email WHERE id_personne = ' .$id_personne);

        $sql->bindValue(':nom', $nom);
        $sql->bindValue(':prenom', $prenom);
        $sql->bindValue(':tel', $tel);
        $sql->bindValue(':email', $email);

        $result = $sql->execute();

        //On réaffecte les nouvelles valeures dans la session actuelle pour que l'utilisateur puisse voir ses informations immédiatement.
        $_SESSION['utilisateur']->setNom($nom);
        $_SESSION['utilisateur']->setPrenom($prenom);
        $_SESSION['utilisateur']->setTel($tel);
        $_SESSION['utilisateur']->setEmail($email);
    

        if($result === FALSE){
            return 'Une erreur est survenue lors de l\'update'; 
        }

    }


    //Fonction utilisée par l'administrateur pour modifier les informations d'un utilisateur et et son rang (mais pas son password).
    public function updatePersonneAdmin($nom, $prenom, $tel, $email, $id_role, $id_personne){

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

    //Fonction utilisée pour supprimer un utilisateur définitivement. L'administrateur ne peut pas se supprimer lui-même cependant. 
    


    //Fonction pour vérifier que l'email entré par l'utilisateur est bon lors de la connexion
    public function getUserByEmail($email){

        $check = $GLOBALS['bdd']->query('SELECT COUNT(*) FROM personne WHERE email = "'.$email.'"');
        $check = $check->fetchColumn();

        return $check;
    }

    //Fonction pour récupérer les informations d'un utilisateur après authentification
    public function getPersonneInfos($email){
        
        
        $utilisateur = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE email = "'.$email.'"');

        $utilisateur = $utilisateur->fetch();
        //var_dump($utilisateur);

        $this->hydrate($utilisateur);

        return $this; 
    }

    //fonction pour récupérer le nom d'un coach selon l'id d'une fiche de suivi
    public function getPrenomCoach($id_fiche){

        $sql = $GLOBALS['bdd']->query('SELECT prenom FROM personne INNER JOIN commentaire ON personne.id_personne = commentaire.id_personne WHERE commentaire.id_fiche =' .$id_fiche);

        $sql = $sql->fetchColumn();

        return $sql;
    }

    //fonction pour récupérer TOUTES les informations de TOUS les utilisateurs du site ainsi que le nom de leur ROLE qui se trouve sur une autre table. Le résultat retourné est un array.  
    public function getAllPersonnes(){

        $personnes = [];
        
        $sql = $GLOBALS['bdd']->query('SELECT * FROM personne p INNER JOIN role r ON p.id_role = r.id_role');

        while($donnees = $sql->fetch()){

            $personnes[] = $donnees;
        }

        return $personnes;
    }

    //fonction utilisée pour récupérer toutes les informations d'une personne. Seulement utilisé par l'administrateur.
    public function getPersonne($id_personne){

        $sql = $GLOBALS['bdd']->query('SELECT * FROM personne WHERE id_personne =' .$id_personne);

        $sql = $sql->fetch();

        $this->hydrate($sql);

        return $this;
    } 

    //Fonction utilisé par l'administrateur pour supprimer un utilisateur
    public function deletePersonne(int $id_personne){

        //On doit d'abord supprimer tous les commentaires liés à une fiche de suivi. On prépare la requête. 
        $commentaires = $GLOBALS['bdd']->query('SELECT * FROM fichesuivi WHERE id_personne =' .$id_personne);
        $commentaires = $commentaires->fetchall();
        //On efface tous les commentaires liés à une fiche de suivi
        foreach($commentaires as $value){

            $sql = $GLOBALS['bdd']->prepare('DELETE FROM commentaire WHERE id_fiche =' .$value['id_fiche']);
            $result = $sql->execute();
        }

        //On supprime les fiches de suivi liées à l'utilisateur avant de pouvoir le supprimer. 
        $sql = $GLOBALS['bdd']->prepare('DELETE FROM fichesuivi WHERE id_personne = '.$id_personne);
        
        $result = $sql->execute();

        //On efface maintenant l'utilisateur
        $sql = $GLOBALS['bdd']->prepare('DELETE FROM personne WHERE id_personne = '.$id_personne);

        $result = $sql->execute(); 

    }

}