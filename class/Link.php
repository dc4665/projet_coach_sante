<?php

//Classe aui facilite l'écriture d'URL
class Link {
    
    public function getPage(string $page){
        return './?action='.$page; 
    }
    
}
