<?php
/** Ce fichier contient tous les composants (fichiers, variables, functions) importants et nécessaires qui se répètent dans le code. */

//On ajoute Smarty pour qu'il soit accessible dans tout le code
require('libs/Smarty.class.php');

//Instantacion d'un objet de la classe Smarty
$smarty = new Smarty();

//Ajout du fichier des fonctions
include_once('functions/functions.php');

//Inclusion du fichier qui comprend les constantes de connexion à la BDD
include_once('./param.inc.php');

//chargement des classes. Cela va surtout nous éviter de devoir faire plein de 'require'
spl_autoload_register('chargerClass'); //chargerClass se trouve dans functions.php

//création de l'objet PDO pour se connecter à la BDD, on fait appelle à une fonction pour l'instancier
$bdd = connexionpdo();

//Création d'une variable superglobale accessible partout. On crée cette variable pour se connecter à la bdd. cette variable $GLOBALS est un array. GLOBALS est un keyword dans PHP!
$GLOBALS['bdd'] = $bdd; 

//On démarre une session
session_start();

//On transfert la session client de l'utilisateur dans une variable smarty. On vérifie d'abord l'existence de $_SESSION['utilisateur']. La session sera ainsi accessible sur toutes les pages du site. 
if(isset($_SESSION['utilisateur'])){

    $smarty->assign('utilisateur', $_SESSION['utilisateur']);
}

//Pour détruire une session si le boutton "deconnexion a été cliqué"
if(isset($_GET['session'])){

    //détruire une session
    session_destroy();
    //redirige vers la page de connexion en évitant le paramètre session=out qui pose conflit
    echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=connexion"</script>');
}

//Instantacion d'un objet de la classe Link et sa déclaration globale
$link = new Link();

$smarty->assign('link', $link);