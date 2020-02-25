<?php
/* CONTROLLER EN PHASE DE PROTOTYPE POUR TESTER L'AFFICHAGE */


$fiches = new Fiche_suivi();

//la fonction getFiches() prend en paramètre un id_personne. Il faut donc qu'au moment de la connexion on puisse envoyer un id_personne qu'on va transmettre à cette fonction
$fiches = $fiches->getFiches(3);

//Assignement des variables à Smarty
$smarty->assign(array(
    'fiches' => $fiches
));


//Appel du bon fichier tpl
$smarty->display('template/client.tpl');