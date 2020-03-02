<?php

if(isset($_SESSION['utilisateur'])){

    $smarty->display('template/nouvelle_fiche.tpl');
}