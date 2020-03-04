<?php

//Par mesure de sécurité on vérifie qu'on est bien sur une SESSION admin
if($_SESSION['utilisateur']->getId_role() == 1){

    $id_personne = $_GET['id_personne'];
    
    //Récupération des informations d'une personne sous forme d'Objet
    $personne = new Personne();
    $personne = $personne->getPersonne($id_personne);
    
    //Récupération des noms des roles et des id
    $roles = new Role();
    $roles = $roles->getRoles();
    
    $smarty->assign(array(
        'personne' => $personne,
        'roles' => $roles
    ));
}

if(isset($_POST['modification'])){
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $id_role = $_POST['role'];
    echo($id_role);
    $id_personne = $personne->getId_personne();
}

//Récupérations des informations de l'utilisateur sélectionné dans Admin_manager.tpl

$smarty->display('template/admin_modification.tpl');