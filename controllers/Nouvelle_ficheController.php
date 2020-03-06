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
        
        //var_dump($_FILES);
        //echo('<br/>');
        //var_dump($_FILES['files']['name']['image_2']);

        //Nouvel Objet de la class Image pour pouvoir utiliser ses méthodes. 
        $img = new Image();

        //La fonction moveIMage renvoie à la fin l'adresse finale de l'image apres déplacement
        $source_img_1 = $img->moveImage($_FILES['files']['name']['image_1'], $_FILES['files']['tmp_name']['image_1'], 'fiche_suivi');

        $source_img_2 = $img->moveImage($_FILES['files']['name']['image_2'], $_FILES['files']['tmp_name']['image_2'], 'fiche_suivi');

        $img->resizeImage($source_img_1, 500, $_FILES['files']['name']['image_1'], 'fiche_suivi');
        $img->resizeImage($source_img_2, 500, $_FILES['files']['name']['image_2'], 'fiche_suivi');

        
        //On instancie un nouvelle objet de la class Fiche pour utiliser une méthode
        $fiche = new Fiche_suivi();
        $resultat = $fiche->ajouterFiche($date, $poids, $alimentation, $activite, $commentaire, $actif, $id_personne, $_FILES['files']['name']['image_1'], $_FILES['files']['name']['image_2']);
        
        echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=personne&confirmation=ok"</script>');
    }
    
}

$smarty->display('template/nouvelle_fiche.tpl');