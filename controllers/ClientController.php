<?php
/* CONTROLLER EN PHASE DE PROTOTYPE POUR TESTER L'AFFICHAGE */

//echo($_POST['email']);
//echo($_POST['password']);
$email = $_POST['email'];
$password = $_POST['password'];
//echo($email);
//echo($password);

//Vérification de la validité de l'email et du mot de passe 
$check = new Personne();
$check = $check->checklogin($email, $password);

if($check == 1){
    //L'email et le mot de passe sont justes, on récupère les infos du client dans un objet $client
    echo('Email et password juste ');

    $client = new Personne();
    $client = $client->getClientInfos($email);
    //var_dump($client);
    //echo($client->getId_personne());

    //On récuère les fiches de suivi correspondant au client
    $fiches = new Fiche_suivi();
    $fiches = $fiches->getFiches($client->getId_personne());
    var_dump($fiches);

    //Assignement des variables à Smarty
    $smarty->assign(array(
        'fiches' => $fiches
    ));

    //Appel du bon fichier tpl
    $smarty->display('template/client.tpl');



} elseif($check == 0) {
    echo('Password faux ');
} 

/*  
if($check = true){
    echo('success motha fucka');
} else {
    echo('wrong email or password motha fucka');
}
*/

/* BLOC DE TEST
$fiches = new Fiche_suivi();

//la fonction getFiches() prend en paramètre un id_personne. Il faut donc qu'au moment de la connexion on puisse envoyer un id_personne qu'on va transmettre à cette fonction
$fiches = $fiches->getFiches(3);

//Assignement des variables à Smarty
$smarty->assign(array(
    'fiches' => $fiches
));


//Appel du bon fichier tpl
$smarty->display('template/client.tpl');
*/