<?php

if(isset($_POST['inscription'])){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $taille = $_POST['taille'];
    $date_naissance = $_POST['date_naissance'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sexe = $_POST['sexe'];
    
    //On instancie un objet vide pour pouvour utiliser la méthode
    $utilisateur = new Personne();

    //Vérification que l'email n'existe pas déjà dans la condition if
    $check = $utilisateur->getUserByEmail($email);

    if($check > 0){

        $smarty->assign('alert', 'Cette adresse Email est déjà utilisée');

    } else {
        $utilisateur->ajouterPersonne($nom, $prenom, $tel, $email, $password, $date_naissance, $sexe, $taille);
        var_dump($utilisateur);
        $smarty->assign('success', 'Bienvenu sur Coach Santé! Vous pouvez à présent vous connecter!');
    }
}

$smarty->display('template/inscription.tpl');