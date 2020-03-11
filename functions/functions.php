<?php

//function pour charger les classes. Appelée par spl_autoload_register dans include.php
function chargerClass($classe){

    require './class/'.$classe.'.php';
}

//function pour se connecter à la bdd et créer un objet PDO
function connexionpdo(){
    try{ //va essayer de se connecter à la BDD
        $bdd = new PDO('mysql:host='.HOST.';dbname='.BDD, USER, PASSWORD);
        return $bdd; 
    }
    //PDOException va afficher un message d'erreur grâce à sa methode getMessage s'il n'arrive pas à se connecter à la bdd. 
    catch(PDOException $except){
        echo('Echec de la connexion à la base de données: '.$except->getMessage());
        return FALSE;
        exit();
    }

}