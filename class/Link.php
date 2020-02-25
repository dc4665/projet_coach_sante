<?php

//Classe aui facilite l'écriture d'URL
class Link {
    
    public function getPage(string $page){
        return './?action='.$page; 
    }

    public function getFiche(int $id_fiche){
        return '?action=fiche_suivi&id_fiche='.$id_fiche;
    }
    
}
