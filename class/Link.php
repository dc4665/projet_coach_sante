<?php
/**
*\brief La classe Link est utilisée pour gérer les adresses URl et chemin sur le site.
*/
class Link {
    
    /** Méthode utilisée par le routeur pour diriger vers la page souhaitée 
     * @param string $page
     * @return string
    */
    public function getPage(string $page){
        return './?action='.$page; 
    }

    /** Méthode utilisée pour diriger vers la bonne fiche de suivi 
     * @param int $id_fiche
     * @return string
    */
    public function getFiche(int $id_fiche){
        return '?action=fiche_suivi&id_fiche='.$id_fiche;
    }

    /** Méthode seulement utilisée par l'administrateur pour renvoyer sur le bon profil utilisateur pour une modification. 
     * @param int $id_personne
     * @return string
    */
    public function getUtilisateur(int $id_personne){
        return '?action=admin_modification&id_personne='.$id_personne;
    }
    
    /** Méthode utilisée pour séléctionner une image dans le bon format. Prend en paramètre le format de l'image souhaité. 
     * @param int $taille
     * @return string
    */
    public function getImage(int $taille){
        return 'template/img/fiche_suivi/'.$taille.'-'; 
    }
}
