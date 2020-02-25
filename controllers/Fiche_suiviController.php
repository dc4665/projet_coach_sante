<?php

//Ce fichier sera notre routeur
include_once('include.php');

//Récupération de l'id_fiche
$id_fiche = $_GET['id_fiche'];

//Brouillon Test pour vérifier que ma fonction getFiche() fonctionne. 
$fiche = new Fiche_suivi();
$fiche = $fiche->getFiche($id_fiche);
//var_dump($fiche);

//Création et assignation des variables smarty
$smarty->assign(array(
    'fiche' => $fiche
));

/* 25/02: pour le moment la récupération et l'affichage des variables fonctionnent, le prblème est de pouvoir accéder à la fiche de suivi via l'url de la page ClientController.php */

//Appel du bon template par smarty
$smarty->display('template/fiche_suivi.tpl');
