<?php
/** Ce fichier gère la modification d'un membre. Utilisé seulement par l'administrateur.  */
//Par mesure de sécurité on vérifie qu'on est bien sur une SESSION admin
if($_SESSION['utilisateur']->getId_role() == 1){

    $id_personne = $_GET['id_personne'];
    
    //Récupération des informations d'une personne sous forme d'Objet
    $personne = new Personne();
    $personne = $personne->getPersonne($id_personne);
    
    //Récupération des noms des roles et des id
    $roles = new Role();
    $roles = $roles->getRoles();
    
    $smarty->assign(array(
        'personne' => $personne,
        'roles' => $roles
    ));
}

//Récupération des modifications faites par l'administrateur
if(isset($_POST['modification'])){
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $id_role = $_POST['role'];
    
    $id_personne = $personne->getId_personne();

    $modification = new Personne();
    $modification = $modification->updatePersonneAdmin($nom, $prenom, $tel, $email, $id_role, $id_personne);

    echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=admin_manager&confirmation=ok"</script>');

    
}

$smarty->display('template/admin_modification.tpl');