<?php
/** Ce fichier gère la première page du back-office lorsqu'un utilisateur se connecte. On adapte la récupération d'information selon le rôle de l'utilisateur ainsi que de son id_personne.  */

//On vérifie l'id_role de l'utilisateur connecté. Si la personne est simple membre. 
if($_SESSION['utilisateur']->getId_role() == 3){

    $fiches = new Fiche_suivi();
    $fiches = $fiches->getFiches($_SESSION['utilisateur']->getId_personne());

    //Affectation des variables smarty
    $smarty->assign(array(
        'fiches' => $fiches,
        'utilisateur' => $_SESSION['utilisateur']
    ));

    //Condition qui vérifie qu'une nouvelle fiche de suivi a été envoyée
    if(isset($_GET['confirmation'])){

        $smarty->assign('success', 'Une nouvelle de suivi a bien été envoyée! Nos coachs vous feront un retour le plus rapidement possible!');
    }
    //Condition qui vérifie que l'utilisateur a changé ses informations personnelles. 
    if(isset($_GET['modification'])){
        
        $smarty->assign('modification', 'Vos informations ont bien été mises à jour!');
    }

    //Appel de personne.tpl
    $smarty->display('template/personne.tpl');

} 

//Si la personne connectée est Coach
elseif($_SESSION['utilisateur']->getId_role() == 2) {

    //On récupère toutes les fiches de suivi qui ont une valeur "actif" de 0. 0 voulant dire que la fiche n'a pas encore été commentée par un autre coach.
    $fiches = new Fiche_suivi();
    $fiches = $fiches->getAllFichesAttentes();
   
    $smarty->assign(array(
        'utilisateur' => $_SESSION['utilisateur'],
        'fiches' => $fiches
    ));

    //Dans cette condition on vérifie si le commentaire d'une fiche de suivi a été soumis ou pas
    if(isset($_GET['confirmation'])){

        $smarty->assign('success','La fiche de suivi a bien été commentée!');
    }

    $smarty->display('template/personne.tpl');

} elseif($_SESSION['utilisateur']->getId_role() == 1) { //Si la personne connectée est administrateur. 


    $fiches = new Fiche_suivi();
    $fiches = $fiches->getAllFichesAttentes();
   
    $smarty->assign(array(
        'utilisateur' => $_SESSION['utilisateur'],
        'fiches' => $fiches
    ));

    //Dans cette condition on vérifie si fiche de suivi a été soumise ou pas
    if(isset($_GET['confirmation'])){

        $smarty->assign('success','La fiche de suivi a bien été commentée!');
    }

    $smarty->display('template/personne.tpl');
} 

