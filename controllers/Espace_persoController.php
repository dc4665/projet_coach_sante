<?php

//Vérifie la présence d'une SESSION
if(isset($_SESSION['utilisateur'])){
    
    if(isset($_POST['modification'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_personne = $_SESSION['utilisateur']->getId_personne();
    
        //On instancie un objet vide pour pouvour utiliser la méthode 
        $utilisateur = new Personne();
        $utilisateur = $utilisateur->updatePersonne($nom, $prenom, $tel, $email, $password, $id_personne);
        
        $smarty->assign('success','Vos informations personnelles ont bien été modifiées.');
    }
}

$smarty->display('template/espace_perso.tpl');