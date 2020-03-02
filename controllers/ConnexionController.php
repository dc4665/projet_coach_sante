<?php

$smarty->display('template/connexion.tpl');

if(isset($_POST['connexion'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    //On créer un nouvel objet de la class Personne vide pour pouvoir utliser la méthode getUserByEmail()
    $user = new Personne();
    $check = $user->getUserByEmail($email);
    var_dump($check);

    //On vérifie ce que nous a renvoyé la méthode getUserByEmail() , 1 = un compte avec cet email existe bien, 0 = aucun compte avec cet email n'existe
    if($check != 0){

        //La fonction getPersonneInfos() récupère les infos de la personne et nous instancie un objet de la class Personne. 
        $user = $user->getPersonneInfos($email);
        var_dump($user);

        //On vérifie à présent la validité du mot de passe
        if($password == $user->getPassword()){
            $_SESSION['utilisateur'] = $user;
            echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=Personne"</script>'); 
        } else {
            $smarty->assign('erreur', 'Le mot de passe est inccorect');
        }
    }
}