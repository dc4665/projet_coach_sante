<?php

if(isset($_POST['recherche'])){
    $recherche = $_POST['recherche'];

    $rechercher = new Personne;

    $client = $rechercher->recherchePersonne($recherche);

    if(count($client) == 0){
        $smarty->assign('alert', 'Ce client est inexistant');
    }
    else{
        $smarty->assign(array(
            'clients' => $client
        ));
    }

}

$smarty->display('template/recherche.tpl');

