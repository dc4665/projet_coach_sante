<?php

//Classe aui facilite l'écriture d'URL
class Link {
    
    //Fonction utilisé par le routeur pour diriger vers la page souhaitée
    public function getPage(string $page){
        return './?action='.$page; 
    }

    //Fonction utilisé pour diriger vers la bonne fiche de suivi
    public function getFiche(int $id_fiche){
        return '?action=fiche_suivi&id_fiche='.$id_fiche;
    }

    //Fonction seulement utilisé par l'administrateur pour renvoyer sur le bon profil utilisateur pour une modification.
    public function getUtilisateur(int $id_personne){
        return '?action=admin_modification&id_personne='.$id_personne;
    }
    
    
}
