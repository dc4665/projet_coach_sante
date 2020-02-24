<?php
//Ce fichier contient tous les composants (fichiers, variables, functions) importants et nécessaires qui se répètent dans le code. 

//On ajoute Smarty pour qu'il soit accessible dans tout le code
require('libs/Smarty.class.php');

//Instantacion d'un objet de la classe Smarty
$smarty = new Smarty();

//Ajout du du fichier des fonctions
include_once('functions/functions.php');

//chargement des classes. Va surtout nous éviter de devoir faire plein de 'require'
spl_autoload_register('chargerClass'); //chargerClass se trouve dans functions.php

require('class/Link.php');

//Instantacion d'un objet de la classe Link et sa déclaration globale
$link = new Link();

$smarty->assign('link', $link);