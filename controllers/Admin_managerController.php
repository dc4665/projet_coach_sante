<?php

//Par mesure de sécurité on vérifie qu'on est bien sur une SESSION admin
if($_SESSION['utilisateur']->getId_role() == 1){
    
    //Récupération de la liste de tous les membres du site et de leurs rangs:
    $personnes = new Personne();
    $personnes = $personnes->getAllPersonnes();

    //Assignation des variables smarty
    $smarty->assign(array(
        'personnes' => $personnes
    ));
    
}


$smarty->display('template/admin_manager.tpl');