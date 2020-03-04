<?php

//Ce fichier sera notre routeur
include_once('include.php');

//Récupération de l'id_fiche
$id_fiche = $_GET['id_fiche'];

$fiche = new Fiche_suivi();
$fiche = $fiche->getFiche($id_fiche);

//Appelle à une fonction pour vérifier si la fiche de suivi a déjà été commenté ou pas. Permet d'afficher la section commentaire de coach si un coach a effectivement commenté la fiche
$commented = new Commentaire();
$commented = $commented->checkCommentaire($id_fiche);

//Création et assignation des variables smarty
$smarty->assign(array(
    'fiche' => $fiche
));

//Condition si c'est un utilisateur de type membre/client
if(isset($_SESSION['utilisateur'])){

    if($_SESSION['utilisateur']->getId_role() == 3){

        //Si une fiche a été commentée, on charge les commentaires du coach et on les envoie à smarty. On utilise également une fonction pour récupérer le nom du coach qui a commenté la fiche. 
        if($commented > 0){
            $commentaires = new Commentaire();
            $commentaires = $commentaires->getCommentaires($id_fiche);
            
            $coach = new Personne();
            $coach = $coach->getPrenomCoach($id_fiche);

            $smarty->assign(array(
                'commentaires' => $commentaires,
                'coach' => $coach
            ));
        }
    }

}

//Récupération de la review du coach sur la fiche de suivi. Cette secion du code ne sert que si l'utilisateur est Coach ou Administrateur. 
if(isset($_POST['coach_review'])){
    $alimentation_coach = $_POST['alimentation_coach'];
    $activite_coach = $_POST['activite_coach'];
    $commentaire_coach = $_POST['commentaire_coach'];
    $id_personne = $_SESSION['utilisateur']->getId_personne();

    //Création d'un objet de class Commentaire vide pour utiliser sa méthode d'ajout le commentaire dans la BDD
    $commentaires = new Commentaire();
    $result = $commentaires->addCommentaire($alimentation_coach, $activite_coach, $commentaire_coach, $id_personne, $id_fiche);
    
    echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=personne&confirmation=ok"</script>');

}

//Appel du bon template par smarty
$smarty->display('template/fiche_suivi.tpl');
