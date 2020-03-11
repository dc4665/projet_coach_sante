<?php
/** Ce fichier est notre routeur */
//On inclut include.php qui réunit toutes les variables et composants importants dont on a besoin sur tout le site. 
include_once('include.php');

//création du routeur pour rediriger l'utilisateur vers la bonne URL
if(isset($_GET['action'])){

    $action = $_GET['action'];
    //Si le paramètre action existe, il chargera le bon controller.
    require('controllers/'.ucfirst($action).'Controller.php');
} else {
    //S'il n'y a pas de paramètre action, on redirige vers la page accueil (fichier IndexController.php).
    require('controllers/IndexController.php');
}