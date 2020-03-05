<?php

setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
//On vérifie l'id_role de l'utilisateur connecté 
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

    if(isset($_GET['modification'])){
        
        $smarty->assign('modification', 'Vos informations ont bien été mises à jour!');
    }

    //Appel de personne.tpl
    $smarty->display('template/personne.tpl');

} 

//Si la personne connectée est Coach
elseif($_SESSION['utilisateur']->getId_role() == 2) {

    //On récupère toutes les fiches de suivi qui ont une valeur "actif" de 0. 0 voulant dire que la fiche n'a ppas encore été commentée par un coach
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

} elseif($_SESSION['utilisateur']->getId_role() == 1) {


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




/* 
if($_SESSION['utilisateur']->getId_role() == 3){
    //L'email et le mot de passe sont justes, on récupère les infos du client dans un objet $client

    $personne = new Personne();
    $personne = $personne->getPersonneInfos($email);
    
    //On affiche les bonnes informations selon l'id_role de la personne qui s'est connectée
    if($personne->getId_role() == 3){

         //On récuère les fiches de suivi correspondant au personne
        $fiches = new Fiche_suivi();
        $fiches = $fiches->getFiches($personne->getId_personne());
        

        //Assignement des variables à Smarty
        $smarty->assign(array(
            'fiches' => $fiches,
            'personne' => $personne
        ));

        //Appel du bon fichier tpl
        $smarty->display('template/personne.tpl');

    } elseif($personne->getId_role() == 2) {

        $smarty->assign('personne', $personne);

        $smarty->display('template/personne.tpl');
    }


} elseif($check == 0) {
    echo('Password faux ');
} 
 */
