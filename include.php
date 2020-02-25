<?php
//Ce fichier contient tous les composants (fichiers, variables, functions) importants et nécessaires qui se répètent dans le code. 

//On ajoute Smarty pour qu'il soit accessible dans tout le code
require('libs/Smarty.class.php');

//Instantacion d'un objet de la classe Smarty
$smarty = new Smarty();

//Ajout du du fichier des fonctions
include_once('functions/functions.php');

//Inclusion du fichier qui comprendre les constantes de connexion à la BDD
include_once('./param.inc.php');

//chargement des classes. Va surtout nous éviter de devoir faire plein de 'require'
spl_autoload_register('chargerClass'); //chargerClass se trouve dans functions.php

//création de l'objet PDO pour se connecter à la BDD, on fait appelle à uen fonction pour l'instancier
$bdd = connexionpdo();

//Création d'une variable superglobale accessible partout. On crée cette variable pour se connecter à la bdd. cette variable $GLOBALS est un array. GLOBALS est un keyword dans PHP!
$GLOBALS['bdd'] = $bdd; 

//Instantacion d'un objet de la classe Link et sa déclaration globale
$link = new Link();

$smarty->assign('link', $link);