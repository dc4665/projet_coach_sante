<?php

//On vérifie si la session de l'utilisateur existe bien
if(isset($_SESSION['utilisateur'])){

//On vérifie qu'un formulaire a été envoyé
    if(isset($_POST['nouvelle_fiche'])){
        
        $date = ($_POST['date']);
        $poids = ($_POST['poids']);
        $alimentation = ($_POST['alimentation']);
        $activite = ($_POST['activite']);
        $commentaire = ($_POST['commentaire']);
        $actif = 0;
        $id_personne = ($_SESSION['utilisateur']->getId_personne());
        
        //On instancie un nouvelle objet de la class Fiche pour utiliser une méthode
        $fiche = new Fiche_suivi();
        $fiche->ajouterFiche($date, $poids, $alimentation, $activite, $commentaire, $actif, $id_personne);

        $smarty->assign('success', 'Une nouvelle fiche a bien été ajoutée, nos coachs l\'examinerons le plus rapidement possible!');
    }
    
}

$smarty->display('template/nouvelle_fiche.tpl');