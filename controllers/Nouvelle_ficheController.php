<?php

//On vérifie si la session de l'utilisateur existe bien
if(isset($_SESSION['utilisateur'])){

//On vérifie qu'un formulaire a été envoyé
    if(isset($_POST['nouvelle_fiche'])){
        
        $date = ($_POST['date']);
        $poids = ($_POST['poids']);
        $alimentation = nl2br(($_POST['alimentation']));
        $activite = nl2br(($_POST['activite']));
        $commentaire = nl2br(($_POST['commentaire']));
        $actif = 0;
        $id_personne = ($_SESSION['utilisateur']->getId_personne());
        
        //On instancie un nouvelle objet de la class Fiche pour utiliser une méthode
        $fiche = new Fiche_suivi();
        $fiche->ajouterFiche($date, $poids, $alimentation, $activite, $commentaire, $actif, $id_personne);
        
        echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=personne&confirmation=ok"</script>');
    }
    
}

$smarty->display('template/nouvelle_fiche.tpl');