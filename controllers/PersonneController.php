<?php
/* CONTROLLER EN PHASE DE PROTOTYPE POUR TESTER L'AFFICHAGE */

//Récupération de l'enail de du password depuis le formulaire de connexion.tpl
$email = $_POST['email'];
$password = $_POST['password'];

//Vérification de la validité de l'email et du mot de passe. On renvoit avec checklogin un int de 1 si les infos correspondent bien.
$check = new Personne();
$check = $check->checklogin($email, $password);

if($check == 1){
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

