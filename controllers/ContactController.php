<?php
/** Ce fichier gère l'envoie d'email via le formulaire de contact utilisable par n'importe quel utilisateur.  */
if(isset($_GET['confirmation'])){

    $smarty->assign('success', 'Votre Email a bien été envoyé !');
}

if(isset($_POST['contact'])){

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $mail = new Mail([
        'to' => 'coach.sante.cci@gmail.com',
        'subject' => $objet,
        'template' => 'mail_contact'
    ]);

    $donnees = [
        'nom' => $nom,
        'email' => $email,
        'objet' => $objet,
        'message' => $message
    ];

    $mail->send($donnees);

    echo('<script>document.location.href="http://localhost/projet_coach_sante/?action=contact&confirmation=ok"</script>');
}

//Appel du bon fichier tpl
$smarty->display('template/contact.tpl');